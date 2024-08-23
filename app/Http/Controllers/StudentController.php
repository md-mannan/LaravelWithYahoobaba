<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class StudentController extends Controller
{
    public function ShowAll()
    {
        $data = Student::paginate(10);

        return view('Home', compact('data'));
    }
    public function addStudent(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $phone = $request->input('phone');
        $address = $request->input('address');

        $data = DB::table('students')->insert([
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'age' => $age,
            'phone' => $phone,
            'address' => $address,
        ]);
        if ($data) {
            return redirect()->route('home')->with('success', '<div class="alert alert-success" id="alert">Student Created Successfully</div>');
        } else {
            return redirect()->route('home')->with('error', '<div class="alert alert-danger" id="alert">Student data Insert Failed</div>');
        }
    }
    public function editStudent(String $id)
    {
        $data = DB::table('students')->find($id);
        return view("Edit", ['data' => $data]);
    }
    public function updateStudent(String $id, Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $phone = $request->input('phone');
        $address = $request->input('address');

        $data = DB::table('students')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'age' => $age,
            'phone' => $phone,
            'address' => $address
        ]);
        if ($data) {
            return redirect()->route('home')->with('success', '<div class="alert alert-success" id="alert">Student Updated Successfully</div>');
        } else {
            return redirect()->route('home')->with('error', '<div class="alert alert-danger" id="alert">Student  Update Failed</div>');
        }
    }
    public function viewStudent(String $id)
    {
        $data = DB::table('students')->find($id);
        return view("View", ['data' => $data]);
    }
    public function deleteStudent(String $id)
    {
        $data = DB::table('students')->where('id', $id)->delete();
        if ($data) {
            return redirect()->route('home')->with('success', 'Student Deleted Successfully');
        } else {
            return redirect()->route('home')->with('error', 'Student  Deleted Failed');
        }
    }

    public function deleteAllStudent()
    {
        $data = DB::table('students')->truncate();
        if ($data) {
            return redirect()->route('home')->with('success', ' <div class="alert alert-danger" id="alert">Data Cleared Failed</div>');
        } else {
            return redirect()->route('home')->with(
                'error',
                ' <div class="alert alert-success" id="alert">Data Cleared Sussessfully</div>'
            );
        }
    }
}
