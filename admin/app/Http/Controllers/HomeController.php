<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\TeachersListModel;


class HomeController extends Controller
{
    
    function HomeIndex(){
        $TotalTeacher = TeachersListModel::count();
        $TotalVisitor = VisitorModel::count();
        return view('Home', [
            'TotalTeacher' => $TotalTeacher,
            'TotalVisitor' => $TotalVisitor
        ]);
    }
}
