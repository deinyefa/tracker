@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h1>Here's a list of all your income</h1>
            </div>
        </div>
        <div class="row">
            <a href="{{ route('income.create') }}">Add a new income</a>
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Made (CAD)</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($income as $made)
                        <tr>
                            <th scope="row">{{ $made->id }}</th>
                            <td>{{ number_format(($made->cents / 100), 2) }}</td>
                            <td>{{ $made->description }}</td>
                            <td>{{ $made->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection