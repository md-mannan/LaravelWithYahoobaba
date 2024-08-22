<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function ShowAll()
    {
        $data = Student::all();
        return view('Home', compact('data'));
    }
    public function addStudent(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'gender' => 'required',
                'age' => 'required',
                'phone' => 'required|numeric',
                'address' => 'required',
            ]
        );
        $data = Student::create($validate);
        if ($data) {
            return redirect()->route('home')->with('message', 'Student Created Successfully');
        } else {
            return redirect()->route('home')->with('message', 'Student data Insert Failed');
        }
    }
    public function editStudent() {}
    public function viewStudent() {}
}
