<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h2 class="text-3xl mb-7 mt-5">Contact Form</h2>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="flex flex-col gap-10">
            <div class="flex flex-row items-center gap-5">
                <label for="">Name: </label>
                <input type="text" name="name" class="border border-slate-500 py-0 rounded-sm">
            </div>
            <div class="flex flex-row items-center gap-5">
                <label for="">Email: </label>
                <input type="text" name="email" class="border border-slate-500 py-0 rounded-sm">
            </div>
            <div class="flex flex-row items-center gap-5">
                <label for="">Phone Number: </label>
                <input type="text" name="phone" class="border border-slate-500 py-0 rounded-sm">
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Message: </label>
                <textarea name="message"cols="30" rows="10" class="border border-slate-500 h-32 w-72 rounded-sm"></textarea>
            </div>
            <div><button type="submit" class="border border-transparent bg-teal-600 text-white p-2 rounded-full px-4 hover:opacity-70 hover:duration-300">Submit</button></div>
        </div>
    </form>
</body>
</html>