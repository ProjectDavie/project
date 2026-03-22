<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() {
        $properties = Property::all();
        return view('admin.properties.index', compact('properties'));
    }

    public function create() {
        return view('admin.properties.create');
    }

    public function store(Request $request) {
        Property::create($request->all());
        return redirect()->route('properties.index');
    }
}