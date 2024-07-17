<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|min:5|max:30',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'date' => 'required|date',
            'message' => 'max:600',
            'file' => 'required|mimes:jpeg,png,pdf,max:2048'
        ]);
    }
}
