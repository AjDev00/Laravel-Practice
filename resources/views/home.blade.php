<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="flex flex-row justify-between px-20 pt-1">
        <div>Title</div>
        <div class="flex flex-row gap-7">
            <a href="{{ route('/') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('settings') }}">Settings</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </div>

</body>
</html>