<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // i have given inputs(data) in the front end
        //done
        // i have to retrieve the data given in frontent
        $data = $request->all();
        unset($data['_token']);
        // i have to create a student using the data retrieved
        $student = Student::create($data);


        dd($student);

    }
}
