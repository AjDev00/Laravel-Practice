<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>
<body>
    <div class="top-header">This is the Header</div>
    <ul>
        <a href="{{ url('main/home') }}">Home</a>
        <a href="{{ url('main/about') }}">About</a>
        <a href="{{ url('main/settings') }}">Settings</a>
    </ul>
    <div class="main-content">
        @yield('main-content')
    </div>
    <div class="footer">This is the footer.</div>
</body>
</html>