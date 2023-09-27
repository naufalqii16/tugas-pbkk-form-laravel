<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee');
    }

    public function store(Request $request){
        // Validasi data yang diunggah, termasuk file
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'NRP' => 'required',
            'genderRadios' => 'required',
            'weight' => 'required|numeric',
            'personal_photo' => 'required|file|mimes:png,jpg,jpeg|max:2048', // Ekstensi dan ukuran maksimal
        ]);

        if ($validator->fails()) {
            return redirect('employee')
                ->withErrors($validator)
                ->withInput();
        }

        $employee = new Employee;
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
            $file->move('uploads/employees/', $filename);
        }
        $employee->save();
        return redirect('employee')->with('status', "new employee has been inserted");

    }
}
