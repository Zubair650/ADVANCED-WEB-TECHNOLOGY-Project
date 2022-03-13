<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Controllers\OTP;
use App\Models\OTP;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
//use Illuminate\Support\Facades\Input;
use App\Models\Disease;
use App\Models\Doctor;
use Illuminate\Support\Str;


//use Validator;
//use Auth;

class PhoneAuthController extends Controller
{
    public function index(){
      return view('Medical.welcome');
    }
    public function otp_store(Request $request)
    {
        $otp = new OTP;
        $otp->name = $request->input('name');
        $otp->phone = $request->input('phone');
        $otp->code = $request->input('code');
        
        $otp->save();
        return redirect()->back()->with('status','OTP Information saved Successfully');
    }
    public function login_otp(Request $request)
    {
     
      return view('Medical.Login_otp');
    }

    public function checkLogin(Request $request)
    {
      //return $request;
      $request->validate(
        [
          'name'=>'required|exists:otp_table,name',
          'code'=>'required|exists:otp_table,code'
        ],
        [
          'name.required'=>'Please Enter a valid Name',
          'code.required'=>'Please Enter a valid OTP Code',
          'name.exists'=>'Name does not exist',
          'code.exists'=>'OTP Code does not exist'
        ]
      );
      $user = OTP:: where('name',$request->name)-> where('code',$request->code);
      //$user = OTP::all();
     //return $user;
      return view('Medical.successlogin');
    }
    public function successlogin(Request $request)
    {
     
      return view('Medical.successlogin');
    }
    public function find()
    {	
    return view('Medical.search');			
    }		
    public function findSearch(Request $request)
    {			
      $request->validate(
        [
          'name'=>'required|exists:diseases,name', 
        ],
        [
          'name.required'=>'Please Enter a valid Name',
          'name.exists'=>'Name does not exist',
          
        ]
      );
      //$user = Disease:: where('name',$request->name);
      //return view('Medical.search_result', compact('user'));
      //$user = Doctor::where('name',$request->name);
      $Name = $request->name;
      $Name = Str::ucfirst($Name);
      $user = Disease :: all()->where('name',$Name);
      return view('Medical.search_result')->with('user',$user);
    }
    

  
}