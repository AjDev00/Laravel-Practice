<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
    @vite('resources/css/app.css')
    <style>
        .error{
            border-color: red;
        }
    </style>
</head>
<body>
    <h2 class="text-3xl mb-7 mt-5 font-serif">Post Form</h2>
    <form action="{{ route('post_store') }}" method="post">
        @csrf
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-0">
                <label for="">Title: </label>
                <input type="text" 
                    name="title" 
                    class="focus:outline-none border border-slate-500 py-0 rounded-sm w-72
                        @error('title') 
                            error 
                        @enderror
                    "
                >
            </div>
            @error('title')
                <b style="font-size: 12px;" class="text-red-500 -mt-10">{{ $message }}</b>
            @enderror

            <div class="flex flex-col gap-0">
                <label for="">Description: </label>
                <textarea type="text" 
                    name="description" 
                    cols="30" 
                    rows="10" 
                    class="focus:outline-none border border-slate-500 h-32 w-72 rounded-sm" 
                >
                </textarea>
            </div>
            @error('description')
                <b style="font-size: 12px;" class="text-red-500 -mt-10">{{ $message }}</b>
            @enderror

            <div>
                <button type="submit" class="border border-transparent bg-teal-600 text-white p-2 rounded-full px-4 hover:opacity-70 hover:duration-300">
                    Submit
                </button>
            </div>
        </div>
    </form>
</body>
</html>