@extends('layouts.dashboard')

@section('title', 'Properties')

@section('content')
<div class="container">
    <h2>Properties</h2>

    <!-- Flash message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Create Property Form -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Create Property</div>
        <div class="card-body">
            <form method="POST" action="{{ route('properties.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Property Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Add Property</button>
            </form>
        </div>
    </div>

    <!-- View Properties Table -->
    <div class="card">
        <div class="card-header bg-secondary text-white">View Properties</div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($properties as $property)
                        <tr>
                            <td>{{ $property->name }}</td>
                            <td>{{ $property->address }}</td>
                            <td>{{ number_format($property->price, 2) }}</td>
                            <td>{{ $property->description }}</td>
                            <td>{{ $property->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No properties found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection