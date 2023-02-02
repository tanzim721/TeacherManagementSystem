<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryModel;


class GalleryController extends Controller
{
    public function GalleryIndex(){
        $data['allData'] = GalleryModel::all();
        return view('Gallery.view', $data);
    }
    public function GallerAdd(){
        return 'ok';
    }
}
