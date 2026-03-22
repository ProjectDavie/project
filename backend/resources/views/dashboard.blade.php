<x-app-layout>
    <div style="padding: 20px;">
        <h1>Hello, {{ auth()->user()->name }}!</h1>
        <p>Welcome to the Landlord-Pro Admin Dashboard</p>

        <div style="margin-top:20px;">
            <a href="{{ route('properties.index') }}" style="margin-right:15px;">View All Properties</a>
            <a href="{{ route('properties.create') }}">Create New Property</a>
        </div>
    </div>
</x-app-layout>