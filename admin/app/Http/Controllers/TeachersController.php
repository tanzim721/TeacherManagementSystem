<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TeachersList;
use DB;


class TeachersController extends Controller
{
    function Index(){
        $dataGallery = TeachersList::all();
        return view('Teachers', [ 'dataGallery' =>$dataGallery]);
    }
    public function GalleryAdd(){
        return view('Gallery.add');
    }
    public function GalleryStore(Request $request){
        $this->validate($request, [
            'gallery_name' => 'required',
            'gallery_image' => 'required|unique:gallery,gallery_image'
        ]);
        $data = new GalleryModel();
        $data->gallery_name = $request->gallery_name;
        $data->gallery_des = $request->gallery_des;
        $data->gallery_img = $request->gallery_img;
        $data->save();
        return redirect()->route('gallery.view')->with('success', 'Data Inserted Successfully');
    }
    public function GalleryEdit($id){
        $editData = GalleryModel::find($id);
        return view('Gallery.edit', compact('editData'));
    }
    public function GalleryUpdate(Request $request, $id){
        $data = GalleryModel::find($id);
        $data->gallery_name = $request->gallery_name;
        $data->gallery_des = $request->gallery_des;
        $data->gallery_img = $request->gallery_img;
        $data->save();
        return redirect()->route('gallery.view')->with('success','Data Update Successfully');
    }
}
