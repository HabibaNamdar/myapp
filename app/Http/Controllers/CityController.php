<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new city.
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created city in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'country_id' => 'required|integer',
            'state_id'   => 'required|integer',
            'status'     => 'required|boolean',
            'timestamps' => 'sometimes|boolean',
        ]);

        City::create($request->all());

        return redirect()->route('cities.index')
                         ->with('success', 'City created successfully.');
    }

    /**
     * Show the form for editing the specified city.
     */
    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified city in storage.
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'country_id' => 'required|integer',
            'state_id'   => 'required|integer',
            'status'     => 'required|boolean',
            
        ]);

        $city->update($request->all());

        return redirect()->route('cities.index')
                         ->with('success', 'City updated successfully.');
    }

    /**
     * Remove the specified city from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')
                         ->with('success', 'City deleted successfully.');
    }
}
