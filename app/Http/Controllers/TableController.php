<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TableController extends Controller
{
    public function show(){
        
        $files = Storage::files('data');
        $users = [];
        foreach ($files as $file){
            $id = basename($file, '.json');
            $users[$id] = json_decode(Storage::get($file));
        }
        
        return view('table', ['users' => $users]);
    }
}
