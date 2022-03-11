<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Disease;
use App\Models\Medicines_Diseases;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $student = Doctor::all();
        return view('Medical.index', compact('student'));
    }

    public function index_med()
    {
        $med = Medicine::all();
        return view('Medical.Medicine_index', compact('med'));
    }
    public function index_medis()
    {
        $dis = Disease::all();
        return view('Medical.Medis', compact('dis'));
    }

    public function index_dis()
    {
        $dis = Disease::all();
        return view('Medical.Disease_index', compact('dis'));
    }

    public function Medicines_Diseases(Request $req)
    {
        $Diseases = Disease::where('id',$req->id)->first();
       
        return view('Medical.medicines_diseases')->with('Diseases',$Diseases);

        return view('Medical.DiseasesList')->with('Diseases',$Diseases);
    }
    public function MeDis(Request $req)
    {
        $Diseases = Disease::all();
        $Medi = Medicine::all();

        return view('Medical.DiseasesList')->with('Diseases',$Diseases)->with('Medi',$Medi);
    }

    public function create()
    {
        return view('Medical.create');
    }

    public function create_med()
    {
        return view('Medical.create_med');
    }

    public function create_dis()
    {
        return view('Medical.create_dis');
    }


    public function dlist()
    {
        return view('Medical.DiseasesList');
    }

    public function store(Request $request)
    {
        $student = new Doctor;
        $student->name = $request->input('name');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->department = $request->input('department');
        $student->bio = $request->input('bio');
        $student->joining_date = $request->input('joining_date');
        $student->save();
        return redirect()->back()->with('status','Doctors Information Added Successfully');
    }

    public function store_med(Request $request)
    {
        $med = new Medicine;
        $med->name = $request->input('name');
        $med->disease = $request->input('disease');
        $med->details = $request->input('details');
        
        $med->save();
        return redirect()->back()->with('status','Medicine Information Added Successfully');
    }

    public function store_dis(Request $request)
    {
        $dis = new Disease;
        $dis->name = $request->input('name');
        $dis->medicine = $request->input('medicine');
        $dis->details = $request->input('details');
        
        $dis->save();
        return redirect()->back()->with('status','Disease Information Added Successfully');
    }
    
    public function store_MeDis(Request $request)
    {
        $md = new Medicines_Diseases;
        
        $md->Medicines_id = $request->Medicines_id;
        $md->Diseases_id = $request->Diseases_id;
        
        $md->save();
        return redirect()->back()->with('status','Medicines & Diseases Information Merged Successfully');
    }


    public function edit($id)
    {
        $student = Doctor::find($id);
        return view('Medical.edit', compact('student'));
    }

    public function edit_med($id)
    {
        $med = Medicine::find($id);
        return view('Medical.edit_med', compact('med'));
    }
    public function edit_dis($id)
    {
        $dis = Disease::find($id);
        return view('Medical.edit_dis', compact('dis'));
    }

    public function update(Request $request, $id)
    {
        $student = Doctor::find($id);
        $student->name = $request->input('name');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->department = $request->input('department');
        $student->bio = $request->input('bio');
        $student->joining_date = $request->input('joining_date');
        
        $student->update();
        return redirect()->back()->with('status','Doctors Information Updated Successfully');
    }

    public function update_med(Request $request, $id)
    {
        $med = Medicine::find($id);
        $med->name = $request->input('name');
        $med->disease = $request->input('disease');
        $med->details = $request->input('details');
       
        $med->update();
        return redirect()->back()->with('status','Medicines Information Updated Successfully');
    }

    public function update_dis(Request $request, $id)
    {
        $dis = Disease::find($id);
        $dis->name = $request->input('name');
        $dis->medicine = $request->input('medicine');
        $dis->details = $request->input('details');
       
        $dis->update();
        return redirect()->back()->with('status','Disease Information Updated Successfully');
    }
    public function destroy($id)
    {
        $student = Doctor::find($id);
        $student->delete();
        return redirect()->back()->with('status','Doctors Information Deleted Successfully');
    }
    public function destroy_med($id)
    {
        $med =Medicine::find($id)->leftJoin('medicines_diseases','medicines.id', '=','medicines_diseases.Medicines_id')->where('medicines.id', $id); 
        Medicines_Diseases::where('Medicines_id', $id)->delete();                           
        $med->delete();
        
        /*$med = Medicine::find($id);
        $med->delete($id);
        
        $Medicines_id = $id;
        $m = Medicines_Diseases::find($Medicines_id);
        $m->delete($id);*/

        return redirect()->back()->with('status','Medicines Information Deleted Successfully');
    }
    public function destroy_dis($id)
    {
        $dis =Disease::find($id)->leftJoin('medicines_diseases','diseases.id', '=','medicines_diseases.Diseases_id')->where('diseases.id', $id); 
        Medicines_Diseases::where('Diseases_id', $id)->delete();                           
        $dis->delete();

        /*$dis = Disease::find($id);
        $dis->delete();*/
        
        return redirect()->back()->with('status','Diseases Information Deleted Successfully');
    }
    public function destroy_md($id)
    {
        $md = Medicines_Diseases::find($id);
        $md->delete();
    
        return redirect()->back()->with('status',' Information Deleted Successfully');
    }
}