<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use App\SessionModel;
use DB;


class SessionController extends Controller
{
    public function Index(){
        // dd('ok');
        $allData = SessionModel::all();
        return view('Session', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('Session.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'session' => 'required|unique:session_models,session'
        ]);
        $data = new SessionModel();
        $data->session = $request->session;
        $data->save();
        return redirect()->route('session.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = SessionModel::find($id);
        return view('Session.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = SessionModel::find($id);
        $data->session = $request->session;
        $data->save();
        return redirect()->route('session.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = SessionModel::find($id);
        $data->delete();
        return redirect()->route('session.view')->with('success','Data Delete Successfully');
    }
}
