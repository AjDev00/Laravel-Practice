<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

//USING RAW SQL QUERY.
class StudentController extends Controller
{
    // public function index(){

    //     //SHOW ALL STUDENTS.
    //     $students = DB::select('select * from students');
    //     foreach( $students as $student ){
    //         echo $student->name . "<br>";
    //         echo $student->email ."<br><br><br>";
    //     }


    //     //SHOW A PARTICULAR STUDENTS.
    //     // $student = DB::select('select * from students where id=?', [3]);

    //     // //to check the format of how the data is displayed like the original form(array or normal string).
    //     // // echo "<pre>";
    //     // // print_r($student);

    //     // echo $student[0]->name . "<br>";
    //     // echo $student[0]->email;

    // }

    // public function create(){

    //     //INSERT INTO STUDENTS.
    //     DB::insert('insert into students (name,email) values(?,?)', ['John Abruzzi', 'j_abruzzi@gmail.com']);
    // }

    // public function update(){

    //     //UPDATE STUDENTS.
    //     DB::update('update students set name=?, email=? where id=?', ['Sucre', 'sucre@gmail.com', 2]);
    // }

    // public function delete(){

    //     //DELETE STUDENTS.
    //     DB::delete('delete from students where id=?', [4]);
    // }



    //USING QUERY BUILDER(Allows insertion of data without having to write sql queries).
    public function index(){
        //Show All Data.
        // $students = DB::table('students')->get();
        // foreach($students as $student){
        //     echo $student->name . "<br>";
        //     echo $student->email . "<br><br><br>";
        // }

        //Show a Single Data.
        // $student = DB::table('students')->where('id', 1)->first();
        // echo $student->name . "<br>";
        // echo $student->email;

        //Show Ranges of Data.
        // $students = DB::table('students')->where('name','=','Bellick')->orWhere('name','=','Sucre')->get();
        // foreach($students as $student){
        //     echo $student->name . "<br>";
        //     echo $student->email . "<br><br><br>";
        // }

        //Using the exists function to print out an error if operation is false.
        // $student_exists = DB::table('students')->where('id',2)->exists();
        // if($student_exists){
        //     $data = DB::table('students')->where('id',2)->first();

        //     // dd($data);

        //     echo $data->name . "<br>";
        //     echo $data->email;
        // }
        // else{
        //     echo 'This user does not exists!';
        // }

        //Using Aggregate Functions to make calculations from the database.
        echo DB::table('fees')->count(); //count the amount of data in the database table.

        //sum
        echo "<br>" . "Sum of Fee Amount: " . DB::table('fees')->sum('fee_amount');

        //average.
        echo "<br>" . "Average Fee Amount: " . DB::table('fees')->avg('fee_amount');

        //maximum.
        echo "<br>" . "Maximum Fee Amount: " . DB::table('fees')->max('fee_amount');

        //minimum.
        echo "<br>" . "Maximum Fee Amount: " . DB::table('fees')->min('fee_amount');
    }

    public function create(){

        //-- Create/Insert multiple data into the database.
        DB::table('students')->insert([
            [
                'name' => 'Bellick',
                'email' => 'bellick@gmail.com'
            ],
            [
                'name' => 'Mahone',
                'email' => 'mahone@gmail.com'
            ]
        ]);
    }

    public function update(){

        //Update a student's data in the database.
        DB::table('students')->where('id',6)->update([
            'name' => 'Theodoro',
            'email' => 'theodoro@gmail.com'
        ]);
    }

    public function delete(){

        //Delete a student's data from the database.
        DB::table('students')->where('id',7)->delete();
    }

    public function join(){

        //Joining Two Tables Together.
        $result = DB::table('students')
        ->join('fees', 'students.id','=','fees.student_id')
        ->select('fees.*', 'students.name', 'students.email')
        ->get();

        // dd($result);
        foreach ($result as $item){
            echo "Name: " . $item->name . "<br>";
            echo "Email: " . $item->email . "<br>";
            echo "Fee Amount: " . $item->fee_amount . "<br>";
            echo "Amount Paid: " . $item->amount_paid . "<br><br><br>";
        }
    }
}
