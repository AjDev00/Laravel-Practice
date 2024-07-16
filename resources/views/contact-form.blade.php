<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    @vite('resources/css/app.css')
    <style>
        .error{
            border-color: red;
        }
    </style>
</head>
<body>
    <div style="font-size: 15px;" class="text-red-500 font-bold">

        {{-- //displaying all errors together. --}}
        <!-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        @endif -->
    </div>
    <h2 class="text-3xl mb-7 mt-5 font-serif">Contact Form</h2>

    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="flex flex-col gap-10">
            <div class="flex flex-row items-center gap-5">
                <label for="">Name: </label>
                <input type="text" name="name" class="border border-slate-500 py-0 rounded-sm @error('name') error @enderror" value="{{ old('name') }}">
            </div>
            @error('name')
                <b style="font-size: 12px;" class="text-red-500 -mt-10">{{ $message }}</b>
            @enderror

            <div class="flex flex-row items-center gap-5">
                <label for="">Email: </label>
                <input type="text" name="email" class="border border-slate-500 py-0 rounded-sm @error('email') error @enderror" value="{{ old('email') }}">
            </div>
            @error('email')
                <b style="font-size: 12px;" class="text-red-500 -mt-10">{{ $message }}</b>
            @enderror

            <div class="flex flex-row items-center gap-5">
                <label for="">Phone Number: </label>
                <input type="text" name="phone" class="border border-slate-500 py-0 rounded-sm @error('phone') error @enderror" value="{{ old('phone') }}">
            </div>
            @error('phone')
                <b style="font-size: 12px;" class="text-red-500 -mt-10">{{ $message }}</b>
            @enderror

            <div class="flex flex-col gap-2">
                <label for="">Message: </label>
                <textarea name="message"cols="30" rows="10" class="border border-slate-500 h-32 w-72 rounded-sm @error('message') error @enderror">{{ old('message') }}</textarea>
            </div>
            @error('message')
                <b style="font-size: 12px;" class="text-red-500 -mt-10">{{ $message }}</b>
            @enderror
            <div><button type="submit" class="border border-transparent bg-teal-600 text-white p-2 rounded-full px-4 hover:opacity-70 hover:duration-300">Submit</button></div>
        </div>
    </form>
</body>
</html>