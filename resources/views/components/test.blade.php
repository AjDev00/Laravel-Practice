<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
    <div>
        <label for="">{{ $label }}</label>
        <br>
        <input class="border border-slate-400 p-1 placeholder:text-slate-300 font-serif shadow-sm focus:outline-none" type="text" placeholder={{ $placeholder }}>
    </div>    
</body>
</html>