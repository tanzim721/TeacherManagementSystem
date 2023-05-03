<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\TeachersListModel;
use App\SessionModel;
use App\CTandAssignmentModel;
use DB;

class CTandAssignment extends Controller
{
    public function Index(){
        // dd('ok');
        $allData = CTandAssignmentModel::all();
        return view('CTandAssignment', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('CTandAssignment.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'ctandassignament' => 'required|unique:c_tand_assignment_models,ctandassignament'
        ]);
        $data = new CTandAssignmentModel();
        $data->ctandassignament = $request->ctandassignament;
        $data->save();
        return redirect()->route('ctandassignament.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = CTandAssignmentModel::find($id);
        return view('CTandAssignment.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = CTandAssignmentModel::find($id);
        $data->ctandassignament = $request->ctandassignament;
        $data->save();
        return redirect()->route('ctandassignament.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = CTandAssignmentModel::find($id);
        $data->delete();
        return redirect()->route('ctandassignament.view')->with('success','Data Delete Successfully');
    }
}
