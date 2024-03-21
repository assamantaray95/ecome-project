@extends('layouts.app')
@section('title' , 'User Dashboard')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Users</li>
                    <li class="list-group-item">Settings</li>
                    <li class="list-group-item">Logout</li>
                </ul>
            </div>
            <!-- Main content -->
            <div class="col-md-9">
                <h1>Welcome to the User Dashboard</h1>
                <p>This is the main content area of the dashboard.</p>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
@endsection