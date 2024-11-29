<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class resumeController extends Controller
{
    public function index(Request $request){
        $id = $request->query('id'); // Get the 'id' from the query string
        $info = DB::table("information")->where('id', $id)->first(); // Retrieve the record by ID
        return view("resume", ["information" => $info]);
    }
    
    
}



