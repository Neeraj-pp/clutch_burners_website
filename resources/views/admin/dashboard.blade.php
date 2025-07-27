@extends('layouts.app')

@section('content')
<h2>Admin Dashboard</h2>
<p>Welcome, {{ auth()->user()->name }}!</p>

@if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<ul class="list-group">
    <li class="list-group-item"><a href="{{ url('/admin/edit-home') }}">Edit Home Page</a></li>
    <li class="list-group-item"><a href="{{ url('/admin/edit-gallery') }}">Edit Gallery Page</a></li>
    <li class="list-group-item"><a href="{{ url('/admin/edit-contact') }}">Edit Contact Page</a></li>
</ul>

<form method="POST" action="{{ url('/admin/logout') }}" class="mt-3">
    @csrf
    <button class="btn btn-danger">Logout</button>
</form>
@endsection
