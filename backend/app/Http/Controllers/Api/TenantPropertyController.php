<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;

class TenantPropertyController extends Controller
{
    public function index()
    {
        $tenantId = auth()->user()->tenant_id;

        $properties = Property::where('tenant_id', $tenantId)->get();

        return response()->json($properties);
    }
}
