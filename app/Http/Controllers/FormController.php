<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function show(){
    	return view('form');
    }
    
    public function store(Request $request){
    	$users = $request->validate([
    		'name' => 'required|string|max:255',
    		'gender' => 'required|string|max:255',
    		'role' => 'required|string|max:255',
    		'phone' => 'required|string|max:15',
    		'email' => 'required|string|max:255',
    		'password' => 'required|string|max:255'
    	]);
        $users = $request->only('name', 'gender', 'role', 'phone', 'email', 'password');
        Storage::makeDirectory('data');
        Storage::put('data/' . uniqid() . '.json', json_encode($users));
        return redirect('/')->with('message', 'Ok!');
    }
}
