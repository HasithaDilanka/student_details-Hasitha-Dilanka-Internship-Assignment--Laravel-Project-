<?php

namespace App\Http\Controllers;

use domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class StudentController extends ParentController
{
    public function index()
    {
        $response['students'] = StudentFacade::all();
        return view('pages.student.index');
    }
    public function store(Request $request)
    {
        StudentFacade::store($request->all());
        return redirect()->back();
    }



}
