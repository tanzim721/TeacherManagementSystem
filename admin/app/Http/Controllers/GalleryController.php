<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use DB;


class GalleryController extends Controller
{
    public function Index(){
        dd('ok');
        $allData = TeachersListModel::all();
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
            'email' => 'required|unique:teachers_models,email'
        ]);
        $data = new TeachersListModel();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->designation = $request->designation;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('teachers.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = TeachersListModel::find($id);
        return view('Teachers.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = TeachersListModel::find($id);
        $data->name = $request->name;   
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->designation = $request->designation;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('teachers.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = TeachersListModel::find($id);
        $data->delete();
        return redirect()->route('Teachers.view')->with('success','Data Delete Successfully');
    }
}
