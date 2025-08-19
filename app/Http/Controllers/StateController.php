<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::with('country')->get();
        return view('states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('states.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'status'     => 'required|boolean',
        ]);

        State::create($request->all());

        return redirect()->route('states.index')
                         ->with('success', 'State created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        $countries = Country::all();
        return view('states.edit', compact('state', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'status'     => 'required|boolean',
        ]);

        $state->update($request->all());

        return redirect()->route('states.index')
                         ->with('success', 'State updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();

        return redirect()->route('states.index')
                         ->with('success', 'State deleted successfully.');
    }
}