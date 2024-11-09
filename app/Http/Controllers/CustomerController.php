<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\UpdateRequest;
use App\Http\Requests\Customer\StoreRequest;
use App\Models\Customer;
use Exception;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.F
     */
    public function index()
    {
        try {
            $customers = Customer::all()->map(function ($customer) {
                return [
                    'full_name' => $customer->name . ' ' . $customer->surname,
                    'email' => $customer->email,
                ];
            });

            return view('customers.index', compact('customers'));
        } catch (Exception $e) {
            return redirect()->route('categories.index')->with('error', 'Error displaying categories.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $customer = Customer::create($request->validated());

            return redirect()->route('customers.show', $customer)->with('success', 'Registered customer.');
        } catch (Exception $e) {
            return redirect()->route('customers.create')->with('error', 'Error registering customer: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Customer $customer)
    {
        try {
            $customer->update($request->validated());

            return redirect()->route('customers.show', $customer)->with('success', 'Updated customer.');
        } catch (Exception $e) {
            return redirect()->route('customers.edit', $customer)->with('error', 'Error updating customer: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();

            return redirect()->route('customers.index')->with('success', 'Deleted customer.');
        } catch (Exception $e) {
            return redirect()->route('customers.index')->with('error', 'Error deleting customer: ' . $e->getMessage());
        }
    }
}
