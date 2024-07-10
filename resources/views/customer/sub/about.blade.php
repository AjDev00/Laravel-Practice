<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col justify-center items-center pt-10">
        <h1 class="font-bold underline">Customer About Us.</h1>
        <p>This is the customer sub about page.</p>
    
        Country Name: <b>{{ $country }}</b>
        <br />
    
        City Name: <b>{{ $city }}</b>
        <br />
    
        State Name: <b>{{ $state }}</b>

        <!-- //rendering the test component in the about file. -->
        <div>
            <x-test label="Full Name:" placeholder="full name..."/>
            <x-test label="Email Address:" placeholder="email address..."/>
        </div>
    </div>
</body>
</html>

