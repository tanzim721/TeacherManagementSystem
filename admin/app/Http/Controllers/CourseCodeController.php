<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use App\SessionModel;
use App\CTandAssignmentModel;
use App\RollModel;
use App\CourseCodeModel;
use DB;


class CourseCodeController extends Controller
{
    public function Index(){
        // dd('ok');
        $allData = CourseCodeModel::all();
        return view('CourseCode', [ 'allData' => $allData]);
    }
    public function Add(){
        return view('CourseCode.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'coursecode' => 'required|unique:course_code_models,coursecode'
        ]);
        $data = new CourseCodeModel();
        $data->coursecode = $request->coursecode;
        $data->save();
        return redirect()->route('coursecode.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = CourseCodeModel::find($id);
        return view('CourseCode.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = CourseCodeModel::find($id);
        $data->coursecode = $request->coursecode;
        $data->save();
        return redirect()->route('coursecode.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = CourseCodeModel::find($id);
        $data->delete();
        return redirect()->route('coursecode.view')->with('success','Data Delete Successfully');
    }
}
