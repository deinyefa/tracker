@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container content">
        <div class="row">
            <h1>Add Expense</h1>
            <p>Add Expense here!</p>
        </div>

        <div class="row">
            <form action="{{ route('expenses.store') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="expense-category">Category</label>
                    <select class="form-control" name="expense-category" id="expense-category">
                        <option disabled selected> -- select an option -- </option>
                        @foreach ($expense_categories as $expense_category)
                            <option value="{{ $expense_category->id }}">{{ $expense_category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="expense-amount">Amount</label>
                    <input type="text" id="expense-amount" name="expense-amount" class="form-control" placeholder="enter expense amount, no symbols">
                </div>
                <div class="form-group">
                    <label for="expense-description">Description</label>
                    <textarea class="form-control" id="expense-description" name="expense-description" rows="3" placeholder="provide a description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>    
@endsection