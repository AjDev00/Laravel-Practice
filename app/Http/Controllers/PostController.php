<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'unique:posts'],
            'description' => ['required'],
            'file' => ['required', 'image']
        ]);
        
        //any uploaded image should go inside the uploads folder in the public path. 
        //if there is no upload folder in the public path, create one.
        $final_name = "new_image." . $request->file('file')->extension();
        $request->file('file')->move(public_path('uploads'), $final_name);

        return redirect()->back()->with('success'); //redirect back after successfull uploading.
        // for($i = 500; $i>=0; $i--){
        //     $final_name = "new_image_" . $i . "." . $request->file('file')->extension();
        //     continue;
        // }
        // dd($request->all());     
        // echo "Success!!";
    }
}
