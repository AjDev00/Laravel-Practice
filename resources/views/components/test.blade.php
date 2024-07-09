<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
    <div class="flex flex-col justify-center items-center mt-5">
        <label for="" class="font-bold">{{ $label }}</label>
        <input class="w-96 border border-slate-400 p-1 rounded-sm shadow-none focus:outline-none" type="text" placeholder="{{ $placeholder }}">
    </div>
    <br>    
</body>
</html>