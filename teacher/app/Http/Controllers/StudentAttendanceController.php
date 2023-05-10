<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use App\SessionModel;
use App\RollModel;
use App\CourseCodeModel;
use App\StudentAttendanceModel;
use DB;

class StudentAttendanceController extends Controller
{
    public function Index(){
        // dd('ok');
        // $allData = StudentAttendanceModel::all();
        // return view('Roll', [ 'allData' => $allData]);
        // $data['allData'] = StudentAttendanceModel::all();
        $data['allData'] = SessionModel::orderBy('id', 'desc')->get();
        // $data['coursecode'] = CourseCodeModel::all();
        return view('StudentAttendance',$data);
    }
    public function Index2(){
        // dd('ok');
        // $allData = StudentAttendanceModel::all();
        // $data['allData'] = StudentAttendanceModel::all();
        // $data['allData'] = SessionModel::orderBy('id', 'desc')->get();
        $data['allData'] = CourseCodeModel::all();
        return view('StudentAttendance.view2',$data);
    }
    public function Add(){
        $data['coursecode'] = CourseCodeModel::all();
        $data['session'] = SessionModel::all();
        $data['roll'] = RollModel::all();
        return view('StudentAttendance.add',$data);
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'date' => 'required',
            'session' => 'required',
            'roll' => 'required',
            'coursecode' => 'required',
            'attendance_status' => 'required:student_attendance_models,attendance_status'
        ]);
        $countStudent = count($request->roll);
        for ($i=0; $i < countStudent; $i++) { 
            $attendance_status = 'attendance_status'.$i;
            $coursecode = 'coursecode'.$i;
            $attend = new StudentAttendanceModel();
            $attend->roll = $request->roll($i);
            $attend->coursecode = $request->coursecode;
            $attend->date = date('Y-m-d',strtotime($request->date));
            $attend->attendance_status = $request->$attendance_status;
            $attend->save();
        }
        // $data = new StudentAttendanceModel();
        // $data->attendance_status = $request->attendance_status;
        // $data->save();
        return redirect()->route('studentAttendance.details')->with('success', 'Data Inserted Successfully');
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
