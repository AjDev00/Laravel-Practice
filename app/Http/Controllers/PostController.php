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
            'title' => ['required'],
            'description' => ['required']
        ]);

        echo "Success!!";
    }
}
