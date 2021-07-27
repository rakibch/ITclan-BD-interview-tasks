<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class UsersController extends Controller
{
	public function index()
	{
		 $count = DB::table('users')->count();
		 if($count>8)
		 {
		 	for($c=8;$c>=2;$c=$c/2)
		 	{
		 		$data=DB::table('users')->inRandomOrder()->take(1)->delete();
		 		$data1=DB::table('users')->get();

				echo "<pre>";
				print_r($data1);
		 	}
		 	
		 	
		 }
		 else
		 {
		 	return view('welcome',compact('count'));	
		 }
		 
	}
    public function form_submit(Request $request)
    {
    	DB::table('users')->insert([
   	'name' => $request->name,
   	'email' => $request->email,
   	'idea' => $request->idea,
	]);
    return Redirect::to('/');	
   }
}
