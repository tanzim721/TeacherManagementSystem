<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\VisitorModel;
use App\noticeModel;
use DB;


class NoticeController extends Controller
{
    function view(){
        // dd('ok');
        $allData = noticeModel::orderBy('id', 'desc')->take(50)->get();
        return view('Notice', [ 'allData' =>$allData]);
    }
    public function Download(Request $request, $file){
        return response()->download(public_path('assets/'.$file));
    }
    
}
