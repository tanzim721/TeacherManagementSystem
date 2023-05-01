<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\VisitorModel;
use App\noticeModel;
use DB;


class NoticeController extends Controller
{
    public function view(){
        // dd('ok');
        $allData = noticeModel::orderBy('id', 'desc')->take(50)->get();
        return view('Notice', [ 'allData' =>$allData]);
    }
    public function Download(Request $request, $file){
        return response()->download(public_path('assets/'.$file));
    }
    public function pdfView(Request $request, $id){
        // dd('ok');
        $allData = noticeModel::find($id);
        return view('ViewPDF', ['allData' => $allData]);
    }
    
}
