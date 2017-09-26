@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-outline-info" href="{{ route('categories.create') }}">New Category</a>
        </div>
        <div class="row">
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td><a href="{{ route('categories.show', [$category->id]) }}">{{ $category->name }}</a></td>
                            <td>{{ $category->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection