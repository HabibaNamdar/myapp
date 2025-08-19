<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new country.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created country in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries',
            'status' => 'required|boolean',
        ]);

        Country::create($request->only(['name', 'status']));

        return redirect()->route('countries.index')
                         ->with('success', 'Country created successfully.');
    }

    /**
     * Show the form for editing the specified country.
     */
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified country in storage.
     */
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries,name,' . $country->id,
            'status' => 'required|boolean',
        ]);

        $country->update($request->only(['name', 'status']));

        return redirect()->route('countries.index')
                         ->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified country from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')
                         ->with('success', 'Country deleted successfully.');
    }
}
