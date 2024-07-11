<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }


    //function to store the username, email and phone number.
    //the Request request parameter there allows us make a request to our laravel application. 
    //in this case, i am making a post request to store information of users username, email and phone number.
    public function store(Request $request)
    {
        echo $request->input("username");
        echo $request->input("email");
        echo $request->input("phoneNumber");     
    }
}
