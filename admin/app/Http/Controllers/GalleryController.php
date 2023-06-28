<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;
use App\noticeModel;
use DB;


class GalleryController extends Controller
{
    public function Index(){
        // dd('ok');
        $allData = GalleryModel::all();
        return view('Gallery', ['allData'=>$allData]);
    }
    public function Add(){
        return view('Gallery.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'name' => 'required',
            'des' => 'required',
            'time' => 'required',
            'image' => 'required|unique:gallery_models,image'
        ]);
        $data = new GalleryModel();
        $data->name = $request->name;
        $data->des = $request->des;
        $data->time = $request->time;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('gallery.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $editData = GalleryModel::find($id);
        return view('Gallery.edit', compact('editData'));
    }
    // public function Download(Request $request, $file){
    //     return response()->download(public_path('assets/'.$file));
    // }
    public function Update(Request $request, $id){
        $data = GalleryModel::find($id);
        $data->name = $request->name;
        $data->des = $request->des;
        $data->time = $request->time;
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
