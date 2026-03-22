<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Show all properties
    public function index() {
        $properties = Property::all();
        return view('admin.properties.index', compact('properties'));
    }

    // Show create property form
    public function create() {
        return view('admin.properties.create');
    }

    // Store property
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'type' => 'nullable'
        ]);

        Property::create($request->all());

        return redirect()->route('properties.index')->with('success', 'Property created!');
    }
}