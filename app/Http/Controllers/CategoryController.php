<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\StoreRequest;
use App\Http\Requests\Categories\UpdateRequest;
use App\Models\Category;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = Category::all();

            return view('categories.index', compact('categories'));
        } catch (Exception $e) {
            return redirect()->route('categories.index')->with('error', 'Error displaying categories.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $category = Category::create($request->validated());

            return redirect()->route('categories.show', $category)->with('success', 'Created category.');
        } catch (Exception $e) {
            return redirect()->route('categories.create')->with('error', 'Error creating category: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $category)
    {
        try {
            $category->update($request->validated());

            return redirect()->route('categories.show', $category)->with('success', 'Updated category.');
        } catch (Exception $e) {
            return redirect()->route('categories.edit', $category)->with('error', 'Error updating category: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Deleted category.');
        } catch (Exception $e) {
            return redirect()->route('categories.index')->with('error', 'Error deleting category: ' . $e->getMessage());
        }
    }
}
