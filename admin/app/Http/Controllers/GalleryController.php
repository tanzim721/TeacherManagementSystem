<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;


class GalleryController extends Controller
{
    function GalleryIndex(){
        $dataGallery = GalleryModel::all();
        return view('Gallery', [ 'dataGallery' =>$dataGallery]);
    }
    public function GallerAdd(){
        return view('Gallery.add');
    }
}
