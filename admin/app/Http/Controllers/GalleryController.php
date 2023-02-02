<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryModel;


class GalleryController extends Controller
{
    function GalleryIndex(){
        $GalleryData = GalleryModel::all();
        return view('Gallery.view', ['GalleryData'=>$GalleryData]);
    }
}
