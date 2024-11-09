<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rent\StoreRequest;
use App\Http\Requests\Rent\UpdateRequest;
use App\Models\Customer;
use App\Models\Dress;
use App\Models\Rent;
use Exception;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $rents = Rent::with('customer')->get();

            return view('rents.index', compact('rents'));
        } catch (Exception $e) {
            return redirect()->route('rents.index')->with('error', "Error displaying rents.");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $customers = Customer::all();
            $dresses = Dress::all();

            return view('rents.create', compact('customers', 'dresses'));
        } catch (Exception $e) {
            return redirect()->route('rents.index')->with('error', 'Error getting data: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $rent = Rent::create($request->validated());

            return redirect()->route('rents.show', $rent)->with('success', 'Created rent.');
        } catch (Exception $e) {
            return redirect()->route('rents.create')->with('error', 'Error creating rent: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rent $rent)
    {
        return view('rents.show', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rent $rent)
    {
        try {
            $customers = Customer::all();
            $dresses = Dress::all();

            return view('rents.edit', compact('rent', 'customers', 'dresses'));
        } catch (Exception $e) {
            return redirect()->route('rents.index')->with('error', 'Error getting data to update: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Rent $rent)
    {
        try {
            $rent->update($request->validated());

            return redirect()->route('rents.show', $rent)->with('success', 'Updated rent.');
        } catch (Exception $e) {
            return redirect()->route('rents.edit', $rent)->with('error', 'Error updating rent: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        try {
            $rent->delete();

            return redirect()->route('rents.index')->with('success', 'Deleted rent.');
        } catch (Exception $e) {
            return redirect()->route('rents.index')->with('error', 'Error deleting rent: ' . $e->getMessage());
        }
    }
}
