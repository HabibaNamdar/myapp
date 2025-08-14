<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('categories.index', compact('categories'));
    // }

    /**
     * Show the form for creating a new category.
     */
    // public function create()
    // {
    //     return view('categories.create');
    // }

    /**
     * Store a newly created category in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|unique:categories,name|max:255',
    //         'description' => 'nullable|string',
    //     ]);

    //     Category::create($request->all());

    //     return redirect()->route('categories.index')
    //                      ->with('success', 'Category created successfully.');
    // }

    /**
     * Show the form for editing the specified category.
     */
    // public function edit(Category $category)
    // {
    //     return view('categories.edit', compact('category'));
    // }
}