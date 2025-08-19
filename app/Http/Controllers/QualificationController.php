<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qualifications = Qualification::all();
        return view('qualifications.index', compact('qualifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qualifications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Qualification::create([
            'name' => $request->name,
        ]);

        return redirect()->route('qualifications.index')
                         ->with('success', 'Qualification created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $qualification = Qualification::findOrFail($id);
        return view('qualifications.edit', compact('qualification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $qualification = Qualification::findOrFail($id);
        $qualification->update([
            'name' => $request->name,
        ]);

        return redirect()->route('qualifications.index')
                         ->with('success', 'Qualification updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $qualification = Qualification::findOrFail($id);
        $qualification->delete();

        return redirect()->route('qualifications.index')
                         ->with('success', 'Qualification deleted successfully.');
    }

}

