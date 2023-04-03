<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\TeachersListModel;

class TeachersController extends Controller
{
    public function view(){
        // dd('ok');
        $editData = TeachersListModel::all();
        return view('Teachers', [ 'editData' =>$editData]);
    }
    
}
