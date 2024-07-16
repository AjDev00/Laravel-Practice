<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index(){
        return view('contact-form');
    }

    public function store(Request $request){
        // dd($request->all());

        //validating input fields. making sure the necessary input fields are filled before submitting.
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            // 'message' => 'required'
        ]);
    }
}
