<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use App\SessionModel;
use App\RollModel;
use DB;


class RollController extends Controller
{
    public function Index(){
        // dd('ok');
        $allData = RollModel::all();
        return view('Roll', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('Roll.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'roll' => 'required|unique:roll_models,roll'
        ]);
        $data = new RollModel();
        $data->roll = $request->roll;
        $data->save();
        return redirect()->route('roll.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = RollModel::find($id);
        return view('Roll.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = RollModel::find($id);
        $data->roll = $request->roll;
        $data->save();
        return redirect()->route('roll.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = RollModel::find($id);
        $data->delete();
        return redirect()->route('roll.view')->with('success','Data Delete Successfully');
    }
}
