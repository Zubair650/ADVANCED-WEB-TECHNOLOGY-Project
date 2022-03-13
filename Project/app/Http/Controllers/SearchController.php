<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Models\Disease;
class SearchController extends Controller
{
public function find()
{	
return view('search');			
}		
public function findSearch()
{			
$search = Disease::get ( "search" );		
$test = Disease::where ( 'name', 'LIKE', '%' . $search . '%' )->orWhere ( 'medicine', 'LIKE', '%' . $search . '%' )->get ();
if (count ( $test ) > 0)
return view ( 'search' )->withDetails ( $test )->withQuery ( $search );
else
return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );		
}
}