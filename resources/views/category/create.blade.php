@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Create Category</h1>
            <p>Create new category here!</p>
        </div>

        <div class="row">
            <form action="{{ route('categories.store') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="category-name">Name</label>
                    <input type="text" id="category-name" name="category-name" class="form-control" placeholder="Enter Category name">
                    <small id="emailHelp" class="form-text text-muted">A category can be food.</small>
                </div>
                <div class="form-group">
                    <label for="category-description">Description</label>
                    <textarea class="form-control" id="category-description" name="category-description" rows="3" placeholder="Provide a description for this category"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    
@endsection