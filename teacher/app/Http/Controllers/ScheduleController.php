<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        //$ServicesData = ServicesModel::all();
        return view('Schedule.view');
    }
}
