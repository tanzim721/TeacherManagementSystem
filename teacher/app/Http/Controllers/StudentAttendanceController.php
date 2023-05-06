<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use App\SessionModel;
use App\RollModel;
use App\StudentAttendanceModel;
use DB;


class StudentAttendanceController extends Controller
{
    public function Index(){
        // dd('ok');
        // $allData = StudentAttendanceModel::all();
        // return view('Roll', [ 'allData' => $allData]);
        $data['allData'] = StudentAttendanceModel::all();
        $data['allData'] = SessionModel::all();
        return view('StudentAttendance',$data);
    }
    public function Add(){
        return view('StudentAttendance.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'attendance_status' => 'required|unique:student_attendance_models,attendance_status'
        ]);
        $data = new StudentAttendanceModel();
        $data->attendance_status = $request->attendance_status;
        $data->save();
        return redirect()->route('studentAttendance.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = StudentAttendanceModel::find($id);
        return view('StudentAttendance.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = StudentAttendanceModel::find($id);
        $data->attendance_status = $request->attendance_status;
        $data->save();
        return redirect()->route('studentAttendance.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = StudentAttendanceModel::find($id);
        $data->delete();
        return redirect()->route('studentAttendance.view')->with('success','Data Delete Successfully');
    }
}
