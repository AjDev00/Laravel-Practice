<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;

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

            //password validation form.
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()], //strong password(min 8, mixedcase, numbers, symbols).
            'confirm_password' => ['required', 'same:password']
        ]);
    }
}
