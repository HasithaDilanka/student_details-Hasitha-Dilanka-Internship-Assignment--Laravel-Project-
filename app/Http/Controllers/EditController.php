<?php

namespace App\Http\Controllers;

use domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class EditController extends ParentController
{

    public function edit()
    {
        $response['students'] = StudentFacade::all();
        return view('pages.student.edit')->with($response);
    }
    public function delete($student_id)
    {
        StudentFacade::delete($student_id);
        return redirect()->back();
    }

    public function done($student_id)
    {
        StudentFacade::done($student_id);
        return redirect()->back();
    }

    public function update(Request $request, $student_id)
    {
        StudentFacade::update($request->all(), $student_id);
        return redirect()->back();
    }

    public function model(Request $request)
    {

        $response['student'] = StudentFacade::get($request['student_id']);
        return view('pages.student.update')->with($response);
    }


}