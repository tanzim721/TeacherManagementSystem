<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;

class ServiceController extends Controller
{
    function ServiceIndex(){
        $ServicesData = ServicesModel::all();
        return view('Services', [
            'ServicesData'=>$ServicesData
        ]);
    }
}
