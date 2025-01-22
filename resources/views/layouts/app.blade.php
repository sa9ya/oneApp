<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We provide different spectr of services">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="navbar">
            <a href="#" class="logo">ServicePro</a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Main</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </ul>
            <a href="{{ route('contacts') }}" class="btn">Contacts</a>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <p>&copy; 2025 ServicePro. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
