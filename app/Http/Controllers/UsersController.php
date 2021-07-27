<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class UsersController extends Controller
{
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
