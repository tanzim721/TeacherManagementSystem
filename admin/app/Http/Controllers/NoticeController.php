<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\noticeModel;
use DB;


class NoticeController extends Controller
{
    function Index(){
        // dd('ok');
        $allData = noticeModel::all();
        return view('Notice', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('Notice.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'name' => 'required',
            'des' => 'required',
            'time' => 'required',
            'file' => 'required|unique:notice_models,file'
        ]);

        $data = new noticeModel();
        $data->name = $request->name;
        $data->des = $request->des;
        $data->time = $request->time;
        // $data->file = $request->file;
        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file = $filename;
        $data->save();
        return redirect()->route('notice.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = noticeModel::find($id);
        return view('Notice.edit', compact('editData'));
    }
    public function Download(Request $request, $file){
        return response()->download(public_path('assets/'.$file));
    }
    public function Update(Request $request, $id){
        $data = noticeModel::find($id);
        $data->name = $request->name;   
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->designation = $request->designation;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('notice.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = noticeModel::find($id);
        $data->delete();
        return redirect()->route('notice.view')->with('success','Data Delete Successfully');
    }
}
