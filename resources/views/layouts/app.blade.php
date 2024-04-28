<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Bootstrap CSS Link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
</head>
<body class="bg-ligth">

<nav class="navbar navbar-expand-lg navbar-dark bg-indigo">
<div class="container">
    <a class="navbar-brand" href="#">My Application</a>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
        @if(auth()->check())
        <li class="nav-item">
            <p class="nav-link text-xl">Welcome: <b>{{auth()->user()->name}}</b></p>
        </li>
        <li class="nav-item">
            <a href="{{ route('login.destroy')}}" class="nav-link font-bold  py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
        </li>
        @else
        <li class="nav-item">
            <a href="{{ route('login.index')}}" class="nav-link font-semibold hover-bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('register.index')}}" class="nav-link font-semibold border-2 border-white py-2 px-4 rounded-md hover-bg-white hover-text-indigo-700">Register</a>
        </li>
        @endif
    </ul>
    </div>
</div>
</nav>

@yield('content')

<!-- Bootstrap JS Links -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>