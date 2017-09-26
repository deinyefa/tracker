<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tracker</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="#">Expenses</a></li>
            <li><a href="#">Income</a></li>
        </ul>
    </div>
    @yield('content')
</body>
</html>