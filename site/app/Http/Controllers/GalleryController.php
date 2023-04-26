<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\GalleryModel;


class GalleryController extends Controller
{
    public function view(){
        // dd('ok');
        $allData = GalleryModel::all();
        return view('Gallery', [ 'allData' =>$allData]);
    }
}
