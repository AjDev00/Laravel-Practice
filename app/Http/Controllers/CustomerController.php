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
        $customer->customers_name = "Cooper";
        $customer->customers_email = "cooper@gmail.com";
        $customer->customers_phone_number = "7949328923";
        $customer->save();

        //update a single customer data in the database table.
        // $single_customer_data = Customer::find(1);
        // $single_customer_data->customers_name = "Justweb";
        // $single_customer_data->update();

        //delete a single customer data in the database table.
        // $single_customer_data = Customer::find(3);
        // $single_customer_data->delete();
    }

    public function show(){
        //save all the customer data in a variable.
        $customer_data = Customer::all();

        //pass the customer data variable to the view component with the function compact.
        return view("customer-show", compact('customer_data'));
    }
}
