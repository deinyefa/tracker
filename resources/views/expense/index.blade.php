@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h1>Here's a list of all your expenses</h1>
            </div>
        </div>
        <div class="row">
            <a href="{{ route('expenses.create') }}">Add a new expense</a>
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Spent (CAD)</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenses as $expense)
                        <tr>
                            <th scope="row">{{ $expense->id }}</th>
                            <td>{{ number_format(($expense->cents / 100), 2) }}</td>
                            <td>{{ $expense->description }}</td>
                            <td>{{ $expense->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection