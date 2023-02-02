<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;

class ServiceController extends Controller
{
    function ServiceIndex(){
        $ServicesData = ServicesModel::all();
        return view('Services', ['ServicesData'=>$ServicesData]);
    }
    function ServiceDelete(Request $request){
        $id = $request->input('id'); 
        $result = ServicesModel::where('id','=',$id)->delete();
        if($result==true){
            return "Data Delete successfully.";
        }
        else{
            return "Data Delete failed!"; 
        }
    }


    function getServicesData(){
         $result = json_encode(ServicesModel::all());
         return $result;
    }
}
