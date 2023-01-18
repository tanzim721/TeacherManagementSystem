<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class VisitorController extends Controller
{
    function VisitorIndex(){
        $VisitorData = json_decode(VisitorModel::all(), true);
        return view('Visitor', ['VisitorData'=>$VisitorData]);
    }
}
