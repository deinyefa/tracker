@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container content">
        <div class="row">
            <h2>{{ $category->name }}</h2>
            <p class="lead">{{ $category->description }}</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h1>Income</h1>
                <a class="btn btn-outline-info" href="{{ route('income.create') }}" role="button">Add an Income</a>
                <table class="table">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Made(CAD)</th>
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
            <div class="col-md-6">
                <h1>Expenses</h1>
                <a class="btn btn-outline-info" href="{{ route('expenses.create') }}" role="button">Add an Expense</a>
                <table class="table">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Spent(CAD)</th>
                            <th>Description</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expense as $spent)
                            <tr>
                                <th scope="row">{{ $spent->id }}</th>
                                <td>{{ number_format(($spent->cents / 100), 2) }}</td>
                                <td>{{ $spent->description }}</td>
                                <td>{{ $spent->created_at->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection