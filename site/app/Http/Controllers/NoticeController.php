<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\noticeModel;
use DB;


class NoticeController extends Controller
{
    function Index(){
        // dd('ok');
        $allData = noticeModel::all();
        return view('Notice', [ 'allData' =>$allData]);
    }
    
}
