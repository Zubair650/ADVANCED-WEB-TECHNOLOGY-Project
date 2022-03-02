<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Medicine;
use App\Models\Disease;
use App\Models\Medicines_Diseases;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    public function Medicines_Diseases(Request $req)
    {
        $Diseases = Disease::where('id',$req->id)->first();
       
        return view('student.medicines_diseases')->with('Diseases',$Diseases);
    }

    public function create()
    {
        return view('student.create');
    }
    public function dlist()
    {
        return view('student.DiseasesList');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
}