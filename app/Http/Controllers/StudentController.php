<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function index(){

        //SHOW ALL STUDENTS.
        $students = DB::select('select * from students');
        foreach( $students as $student ){
            echo $student->name . "<br>";
            echo $student->email ."<br><br><br>";
        }


        //SHOW A PARTICULAR STUDENTS.
        // $student = DB::select('select * from students where id=?', [3]);

        // //to check the format of how the data is displayed like the original form(array or normal string).
        // // echo "<pre>";
        // // print_r($student);

        // echo $student[0]->name . "<br>";
        // echo $student[0]->email;

    }

    public function create(){

        //INSERT INTO STUDENTS.
        DB::insert('insert into students (name,email) values(?,?)', ['John Abruzzi', 'j_abruzzi@gmail.com']);
    }

    public function update(){

        //UPDATE STUDENTS.
        DB::update('update students set name=?, email=? where id=?', ['Sucre', 'sucre@gmail.com', 2]);
    }

    public function delete(){

        //DELETE STUDENTS.
        DB::delete('delete from students where id=?', [4]);
    }
}
