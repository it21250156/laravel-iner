<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class StudentController extends ParentController
{
    public function index(){
        $response['students'] = StudentFacade::all();
        return view('pages.student.index') -> with($response);
    }

    public function store(Request $request){
        StudentFacade::store($request->all());
        return redirect()->back();

    }

    public function delete($s_id){
        StudentFacade::delete($s_id);
        return redirect()->back();
    }

    public function done($s_id){
        StudentFacade::done($s_id);

        return redirect()->back();
    }
}