<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\GalleryModel;


class GalleryController extends Controller
{
    function GalleryIndex(){
        $data['allData'] = GalleryModel::all();
        return view('Component.HomeGallery', $data);
    }
}



