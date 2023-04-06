<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use DB;

class ServiceController extends Controller
{
    function Index(){
        $ServicesData = ServicesModel::all();
        return view('Services', ['ServicesData'=>$ServicesData]);
    }
    public function Add(){
        return view('Services.add');
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
