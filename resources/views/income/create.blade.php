@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container content">
        <div class="row">
            <h1>Add Income</h1>
            <p>Add Income here!</p>
        </div>

        <div class="row">
            <form action="{{ route('income.store') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="income-category">Category</label>
                    <select class="form-control" name="income-category" id="income-category">
                        <option disabled selected> -- select an option -- </option>
                        @foreach ($income_categories as $income_category)
                            <option value="{{ $income_category->id }}">{{ $income_category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="income-amount">Amount</label>
                    <input type="text" id="income-amount" name="income-amount" class="form-control" placeholder="enter income amount, no symbols">
                </div>
                <div class="form-group">
                    <label for="income-description">Description</label>
                    <textarea class="form-control" id="income-description" name="income-description" rows="3" placeholder="provide a description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
    
    
@endsection