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



    // -- USING QUERY BUILDER(Allows insertion of data without having to write sql queries).
    public function index(){
        //Show All Data.
        $students = DB::table('students')->get();
        foreach($students as $student){
            echo $student->name . "<br>";
            echo $student->email . "<br><br><br>";
        }


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

    //-- Create/Insert multiple data into the database.
    public function create(){

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

    //Update a student's data in the database.
    public function update(){

        DB::table('students')->where('id',6)->update([
            'name' => 'Theodoro',
            'email' => 'theodoro@gmail.com'
        ]);
    }


    //Delete a student's data from the database.
    public function delete(){

        DB::table('students')->where('id',7)->delete();
    }


    //Using the exists function to print out an error if operation is false.
    public function doesExists(){

        $student_exists = DB::table('students')->where('id',2)->exists();
        if($student_exists){
            $data = DB::table('students')->where('id',2)->first();

            // dd($data);

            echo $data->name . "<br>";
            echo $data->email;
        }
        else{
            echo 'This user does not exists!';
        }      
    }


    //Joining Two Tables Together.
    public function join(){

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


    // Using Aggregate Functions to make calculations from the database.
    public function aggregateFunc(){

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


    // GROUPING WITH COUNT.
    // We use this to count and group.
    public function singleGrouping(){
            
        $result = DB::table('fees') //access the table fees in the DB.
        ->select('amount_paid', DB::raw('COUNT(*) as total_count')) //select the amount paid column and count the data there.
        ->groupBy('amount_paid') //group the data, that is count those with the same amount paid and group.
        ->get(); //get the values.

        foreach ($result as $item){
            echo "Amount Paid: " . $item->amount_paid . "<br>";
            echo "Total amount of student that have paid " . $item->amount_paid . ": " . $item->total_count . "<br><br><br>";
        }
    }

    public function multipleGrouping(){
            
        $result = DB::table('fees') //access the table fees in the DB.
        ->select('amount_paid', //select the amount_paid column,
            DB::raw('COUNT(*) as total_count'), //count the data there and store it in a variable total_count,
            DB::raw('SUM(fee_amount) as sum_total') //get the sum of the column fee amount based on those that have paid the same amount(based on the grouped data).
        )
        ->groupBy('amount_paid') //group the data, that is count those with the same amount paid and group.
        ->get(); //get the values.

        foreach ($result as $item){
            echo "Amount Paid: " . $item->amount_paid . "<br>";
            echo "Sum of fee amount that has been paid by people with the same amount paid(" . $item->amount_paid . "): " . $item->sum_total . "<br>";
            echo "Total amount of student that have paid the amount: " . $item->total_count . "<br><br><br>";
        }
    }

    public function having(){

        $result = DB::table('students') //access the table students in the DB.
        ->select('name',
            DB::raw('COUNT(*) as total_count'), //select column name, count the data there and store it in total_count.
        )
        ->groupBy('name') //group the name column.
        ->havingRaw('COUNT(*) > 1') //if there is more than one person in the grouping with the same name,
        ->get(); //get it.

        foreach($result as $item){
            echo "Amount Paid: " . $item->name . "<br>";
            echo "Total amount of student that have paid the amount: " . $item->total_count . "<br><br><br>";
        }
    }

    public function subQuery(){
        $result = DB::table('students')->whereIn('id', function($query){
            $query->select('student_id')
            ->from('fees')
            ->groupBy('student_id');
        })
        ->get();

        echo "<pre>";
        print_r($result);
    }
}
