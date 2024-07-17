<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="border border-slate-300 p-4 w-fit mt-10 ml-80 shadow-lg rounded-md">
        <form action="{{ route('store') }}" method="post" class="flex flex-col gap-6" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-row gap-20">
                <div class="flex flex-col gap-1 ">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="border border-slate-300 rounded-md w-72 p-1.5" placeholder="Enter Name" value="{{ old('name') }}">
                    @error('name')
                        <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 ">
                    <label for="">Email:</label>
                    <input type="text" name="email" class="border border-slate-300 rounded-md w-72 p-1.5" placeholder="Enter Name" value="{{ old('email') }}">
                    @error('email')
                        <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                    @enderror
                </div>
            </div>
            <div class="flex flex-row gap-20">
                <div class="flex flex-col gap-1 ">
                    <label for="">Phone Number:</label>
                    <input type="text" name="phone" class="border border-slate-300 rounded-md w-72 p-1.5" placeholder="Enter Name" value="{{ old('phone') }}">
                    @error('phone')
                        <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 ">
                    <label for="">Date:</label>
                    <input type="text" name="date" class="border border-slate-300 rounded-md w-72 p-1.5" placeholder="Enter Name" value="{{ old('date') }}">
                    @error('date')
                        <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label for="">Message:</label>
                <textarea name="message" id="" class="border border-slate-300 rounded-md w-full h-28 p-1.5" rows="10" value="{{ old('message') }}"></textarea>
                @error('message')
                    <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                @enderror
            </div>
            <div class="flex flex-row gap-64">
                <div class="flex flex-col gap-1">
                    <input type="file" name="file">
                    @error('file')
                        <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                    @enderror
                </div>
                <div class="border border-transparent bg-green-500 text-white p-2 rounded-full px-4 ml-4 items-center justify-center">
                    <button type="submit" class="font-semibold">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>