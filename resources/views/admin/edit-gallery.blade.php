@extends('layouts.app')

@section('content')
<h2>Edit Gallery</h2>

@if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<form action="{{ url('/admin/update-gallery') }}" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="mb-3">
        <label>Select Images</label>
        <input type="file" name="images[]" multiple class="form-control">
    </div>
    <div class="mb-3">
        <label>Image Description</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="mb-3">
        <label>Image Date</label>
        <input type="date" name="image_date" class="form-control">
    </div>
    <button class="btn btn-primary">Upload</button>
</form>


<h5>Current Images:</h5>
<div class="row">
    @foreach($images as $image)
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('storage/gallery/' . $image->image_path) }}" class="card-img-top">
                <div class="card-body text-center">
                    <form action="{{ url('/admin/delete-gallery-image/' . $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
