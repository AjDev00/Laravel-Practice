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
            // 'title' => ['required', 'unique:posts'],
            // 'description' => ['required'],
            'file' => ['required', 'image']
        ]);
        
        //any uploaded image should go inside the uploads folder in the public path. 
        //if there is no upload folder in the public path, create one.
        // $final_name = "new_image." . $request->file('file')->extension();
        // $request->file('file')->move(public_path('uploads'), $final_name);

        // return redirect()->back(); //redirect back after successfull uploading.
        // dd($request->all());     
        // echo "Success!!";
        

        //any uploaded image should go inside the uploads folder in the storage/app path. 
        //if there is no upload folder in the public path, create one.
        $final_name = "new_image." . $request->file->extension();
        $request->file->storeAs('uploads', $final_name);

        return redirect()->back();
    }
}
