<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersList;
use DB;


class TeachersController extends Controller
{
    function Index(){
        // dd('ok');
        $allData = TeachersList::all();
        return view('Teachers', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('Teachers.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'email' => 'required|unique:teachers_lists,email'
        ]);
        $data = new TeachersList();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('teachers.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = TeachersList::find($id);
        return view('Teachers.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = TeachersList::find($id);
        $data->name = $request->name;   
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('teachers.view')->with('success','Data Update Successfully');
    }
}
