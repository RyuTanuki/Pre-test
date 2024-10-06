<!-- resources/views/categories/create.blade.php -->
@extends('layouts.app')

@section('title', 'Add New Category')

@section('content')
    <h1>Add New Category</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-success">Create Category</button>
    </form>
@endsection
