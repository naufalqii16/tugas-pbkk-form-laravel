<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        $employee = new Post;
        $employee->email = $request->email;
        $employee->name = $request->name;
        $employee->NRP = $request->NRP;
        $employee->gender = $request->input('genderRadios');
        $employee->weight = $request->weight;
        if($request->hasfile('personal_photo'))
        {
            $file = $request->file('personal_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $employee->personal_photo = $filename;
            $file->move('public/uploads/employees/', $filename);
        }
        $employee->save();
        return redirect('form')->with('status', "new employee has been inserted");
    }

}
