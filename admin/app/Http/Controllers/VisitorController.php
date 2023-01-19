<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class VisitorController extends Controller
{
    function VisitorIndex(){
        // $VisitorData = json_decode(VisitorModel::all(), true);
        // $VisitorData['allData'] = VisitorModel::all();
        $VisitorData['allData'] = VisitorModel::orderBy('id', 'desc')->take(5)->get();
        return view('Visitor', $VisitorData);
    }
} 


