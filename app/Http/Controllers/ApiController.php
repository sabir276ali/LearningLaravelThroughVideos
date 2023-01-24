<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request){
       
        $students=new Student();

        $students->name=$request->input('name');       
        $students->email=$request->input('email');       
        $students->password=$request->input('password');

        $students->save();
        return response()->json($students);

    }

    public function update(Request $request,$id){
       
        $students=Student::find($id);

        $students->name=$request->input('name');       
        $students->email=$request->input('email');       
        $students->password=$request->input('password');

        $students->save();
        return response()->json($students);

    }

    public function show(){
        $students=Student::all();
        return response()->json($students);
    }
    
    public function show_by_id($id){
        $students=Student::find($id);
        return response()->json($students);
    }
}
