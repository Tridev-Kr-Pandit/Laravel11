<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function showStudent(){
        // $student = DB::table('students')->get(); // here not show pagination
        $student = DB::table('students')->paginate(4);     // here not show pagination

        return view('studentinfo', ['data'=> $student]);
    }

    public function singleStudent(string $id) {
        $student = DB::table('students')->where('id', $id)->get();
        return view('singleStudent', ['data'=>$student]);
    }

    public function deleteStudent(string $id){
        $student = DB::table('students')
                        ->where('id', $id)
                        ->delete();
        if($student){
            return redirect()->route('s_info');
        }
    }



    public function addStudent(Request $req){
        $student = DB::table('students')
                    ->insert([
                        'Name' => $req->name,
                        'Email' => $req->email,
                        'Age' => $req->age,
                        'Phone' => $req->phone,
                        'Address' => $req->address,
                    ]);
        if($student){
            return redirect()->route('s_info');
        }else{
            echo "Record not Added";
        }
        // return redirect()->route('s_info');
    }


    public function updatePage(string $id){
        // $student = DB::table('students')->where('id', $id)->get();
        $student = DB::table('students')->find($id);
        // return $student;
        return view('updatestudent', ['data'=>$student]);
    }

    public function updateStudent(Request $req, $id){
        $student = DB::table('students')->where('id', $id)
                                        ->update([
                                            'Name' => $req->name,
                                            'Email' => $req->email,
                                            'Age' => $req->age,
                                            'Phone' => $req->phone,
                                            'Address' => $req->address,
                                        ]);
        if($student){
            return redirect()->route('s_info');
        }
    }

}

