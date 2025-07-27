@extends('layouts.app')

@section('content')
<h2>Edit Contact Page</h2>
<form action="{{ url('/admin/update-contact') }}" method="POST">
    @csrf
    <div class="mb-3">
        <textarea name="content" class="form-control" rows="6">{{ old('content', $page->content) }}</textarea>
    </div>
    <button class="btn btn-success">Save</button>
</form>
@endsection
