<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\TeachersListModel;
use App\SessionModel;
use App\CTandAssignmentModel;
use App\RollModel;
use App\CourseCodeModel;
use App\GalleryModel;
use DB;

class GalleryController extends Controller
{
    public function Index(){
        // dd('ok');
        $allData = GalleryModel::all();
        return view('Gallery', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('Gallery.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'des' => 'required:gallery_models,des'
        ]);
        $data = new GalleryModel();
        $data->name = $request->name;
        $data->des = $request->des;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('gallery.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = GalleryModel::find($id);
        return view('Gallery.edit', compact('editData'));
    }
    public function Update(Request $request, $id){
        $data = GalleryModel::find($id);
        $data->name = $request->name;   
        $data->gallery = $request->gallery;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('gallery.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = GalleryModel::find($id);
        $data->delete();
        return redirect()->route('gallery.view')->with('success','Data Delete Successfully');
    }
}
