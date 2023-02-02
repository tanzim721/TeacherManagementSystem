<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;


class GalleryController extends Controller
{
    function GalleryIndex(){
        $GalleryData = GalleryModel::all();
        return view('Gallery', ['GalleryData'=>$GalleryData]);
    }
}


