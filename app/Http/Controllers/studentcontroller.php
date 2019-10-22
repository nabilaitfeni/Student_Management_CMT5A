<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
  function index(){
   $student=student::all();
    return view('student')->with('student',$student);
  }
  function create(){
    return view('create');
  }

  function store(Request $request){
    $this->validate($request,[
      'name'=>'required',
      'registration_id'=>'required|integer',
      'department_name'=>'required',
      'Info'=>'required'
    ]);


    $student=new student;
    $student->name=$request->name;
    $student->registration_id=$request->registration_id;
    $student->department_name=$request->department_name;
    $student->Info=$request->Info;
    $student->save();
    return redirect()->route('index');
  }
  function edit($id){
    $students=student::find($id);
    return view('edit')->with('students',$students);
  }
  function update(Request $request,$id){
    $students=student::find($id);
    $students->name=$request->name;
    $students->registration_id=$request->registration_id;
    $students->department_name=$request->department_name;
    $students->Info=$request->Info;
    $students->save();
    return redirect()->route('index');
  }
  function delete($id){
    $students=student::find($id);
    $students->delete();
      return redirect()->route('index');
  }
}
