<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dress\StoreRequest;
use App\Http\Requests\Dress\UpdateRequest;
use App\Models\Category;
use Exception;
use App\Models\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $dresses = Dress::all();

            return view('dresses.index', compact('dresses'));
        }catch(Exception $e){
            return redirect()->route('dresses.index')->with('error', 'Error displaying dresses.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('dresses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try{
            $dress = Dress::create($request->validated());

            return redirect()->route('dresses.show', $dress)->with('success', 'Created dress.');
        }catch(Exception $e){
            return redirect()->route('dresses.create')->with('error', 'Error creating dress: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dress $dress)
    {
        $dress->load('category');

        return view('dresses.show', compact('dress'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dress $dress)
    {
        $categories = Category::all();

        return view('dresses.edit', compact('dress', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Dress $dress)
    {
        try{
            $dress->update($request->validated());

            return redirect()->route('dresses.show', $dress)->with('success', 'Updated dress.');
        }catch(Exception $e){
            return redirect()->route('dresses.edit', $dress)->with('error', 'Error updating dress: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dress $dress)
    {
        try {
            $dress->delete();

            return redirect()->route('dresses.index')->with('success', 'Deleted dress.');
        } catch (Exception $e) {
            return redirect()->route('dresses.index')->with('error', 'Error deleting dress: ' . $e->getMessage());
        }
    }
}
