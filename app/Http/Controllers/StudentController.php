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
        
    }
}
