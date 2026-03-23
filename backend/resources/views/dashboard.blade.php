@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <p>You are logged in!</p>

    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Apartments</h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Active Tenants</h5>
                    <p class="card-text">35</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Pending Requests</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection