@extends('layouts.app')

@section('content')
<h1>Add Property</h1>
<form action="{{ route('properties.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Property Name" required>
    <input type="text" name="location" placeholder="Location" required>
    <button type="submit">Add Property</button>
</form>
@endsection