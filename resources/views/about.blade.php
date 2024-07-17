<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="font-serif ml-10 pt-1">
        <div class="text-4xl mb-10">About Page</div>
        <div class="text-2xl mb-3">Our Services</div>
        <div class="ml-4 flex flex-col gap-3">
            <a href="{{ route('about/what-we-offer') }}" class="">- What we offer</a>
            <a href="{{ route('about/how-we-offer') }}">- How we offer</a>
        </div>
    </div>

</body>
</html>