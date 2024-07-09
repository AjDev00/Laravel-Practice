<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="font-bold">Customer About Us.</h1>
    <p>This is the customer sub about page.</p>

    Country Name: {{ $country }}
    <br />

    City Name: {{ $city }}
    <br />

    State Name: {{ $state }}
    <div>
        <x-test label="Full Name" placeholder="Fullname"/>
        <x-test label="Email Address" placeholder="Email"/>
    </div>
</body>
</html>

