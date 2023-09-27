<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ShowController extends Controller
{
    public function show(){

        $data=Employee::all();

        return view('display', compact('data'));
    }
}
