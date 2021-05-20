<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class Contactcontroller extends Controller
{
    public function store(Request $request)
    {
    	$contact=new Contact(
    		[
    			'name'=>$request->get('name'),
    			'email'=>$request->get('email'),
    			'pnumber'=>$request->get('phone'),
    			'message'=>$request->get('comment'),
    		]);
    	
    	$contact->save();
    	//return view('welcome');
    	return response()->json('successfully');
    }
}
