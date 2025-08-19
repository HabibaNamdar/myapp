<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $skills = Skill::latest()->get();
        return view('skills.index', compact('skills'));
        // Or for API: return response()->json($skills);
    }

    /**
     * Show the form for creating a new skill.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a new skill.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Skill::create($request->only(['name', 'description']));

        return redirect()->route('skills.index')
                         ->with('success', 'Skill created successfully.');
    }

    /**
     * Display a specific skill.
     */
    public function show(Skill $skill)
    {
        return view('skills.show', compact('skill'));
    }

    /**
     * Show the form for editing a skill.
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    /**
     * Update a skill.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $skill->update($request->only(['name', 'description']));

        return redirect()->route('skills.index')
                         ->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove a skill.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skills.index')
                         ->with('success', 'Skill deleted successfully.');
    }
}
