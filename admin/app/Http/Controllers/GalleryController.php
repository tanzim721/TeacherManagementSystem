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
        // dd('ok');
        $allData = GalleryModel::all();
        return view('Gallery', [ 'allData' =>$allData]);
    }
    public function Add(){
        return view('Gallery.add');
    }
    public function Store(Request $request){
        // dd('ok');
        // $this->validate($request, [
        //     'gallery_name' => 'required',
        //     'gallery_des' => 'required',
        //     'gallery_image' => 'required:gallery_models,gallery_image',
        // ]);
        $data = new GalleryModel();
        $data->gallery_name = $request->gallery_name;
        $data->gallery_des = $request->gallery_des;
        if($request->file('images')){
            $file = $request->file('images');
            $filename = date('Ymdhi').$file->getClientOriginalName();
            $file -> move(public_path('upload/gallery_image'), $filename);
            $data['images'] = $filename;
        }
        $data->save();
        return redirect()->route('gallery.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $allData = GalleryModel::find($id);
        return view('Gallery.edit', compact('allData'));
    }
    public function Update(Request $request, $id){
        $data = GalleryModel::find($id);
        $data->gallery_name = $request->gallery_name;
        $data->gallery_des = $request->gallery_des;
        $data->gallery_image = $request->gallery_image;
        $data->save();
        return redirect()->route('gallery.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = GalleryModel::find($id);
        $data->delete();
        return redirect()->route('Gallery.view')->with('success','Data Delete Successfully');
    }
}
