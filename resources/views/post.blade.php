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
    <!-- <h2 class="text-3xl mb-7 mt-2">Post Form</h2> -->
    <h2 style="font-size: 25px;" class="font-semibold mb-5">Uploaded Photo</h2>
    <form action="{{ route('post_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-5">
            <!-- displaying the uploaded image in the blade format. -->
            <div>
                <img src="{{ asset('storage/uploads/new_image.jpg') }}" alt="" style="width: 300px;">
            </div>
            <!-- <div class="flex flex-col gap-0">
                <label for="">Title: </label>
                <input type="text" 
                    name="title" 
                    class="focus:outline-none border border-slate-500 py-0 rounded-sm w-72
                        @error('title') 
                            error 
                        @enderror
                    "
                    value="{{ old('title') }}"
                >
                @error('title')
                    <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                @enderror
            </div>

            <div class="flex flex-col gap-0">
                <label for="">Description: </label>
                <textarea type="text" 
                    name="description" 
                    cols="30" 
                    rows="10" 
                    class="focus:outline-none border border-slate-500 h-32 w-72 rounded-sm
                        @error('description') 
                            error 
                        @enderror
                    "
                    value="{{ old('description') }}"
                >
                </textarea>
                @error('description')
                    <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                @enderror
            </div> -->

            <div class="flex flex-col gap-0">
                <input type="file" name="file">               
                @error('file')
                    <b style="font-size: 12px;" class="text-red-500">{{ $message }}</b>
                @enderror
            </div>

            <div class="flex flex-row gap-20">
                <button type="submit" class="border border-transparent bg-teal-600 text-white p-2 rounded-full px-4 hover:opacity-70 hover:duration-300">
                    Submit
                </button>
                <a href="{{ route('post_delete') }}">
                    <button type="button" class="border border-transparent bg-red-500 text-white p-2 rounded-full px-4 hover:opacity-70 hover:duration-300">
                        Delete Photo
                    </button>
                </a>
            </div>
        </div>
    </form>
</body>
</html>