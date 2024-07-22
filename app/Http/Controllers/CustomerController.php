<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        //use the customer model to create an object instance.
        $customer = new Customer();

        //insert data into the customer table in the database.
        $customer->customers_name = "Aptech";
        $customer->customers_email = "aptech@gmail.com";
        $customer->customers_phone_number = "1234567890";
        $customer->save();
    }

    public function show(){
        //save all the customer data in a variable.
        $customer_data = Customer::all();

        //pass the customer data variable to the view component with the function compact.
        return view("customer-show", compact('customer_data'));
    }
}
