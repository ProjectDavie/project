<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::latest()->get();
        return view('properties.index', compact('properties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Property::create($request->only(['name', 'address', 'price', 'description']));

        return redirect()->route('properties.index')->with('success', 'Property created successfully!');
    }
}