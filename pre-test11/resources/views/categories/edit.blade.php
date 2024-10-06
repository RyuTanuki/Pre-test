<!-- resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <h1>Edit Category</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
@endsection
