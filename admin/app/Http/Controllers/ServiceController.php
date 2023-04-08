<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use DB;

class ServiceController extends Controller
{
    public function Index(){
        $ServicesData = ServicesModel::all();
        return view('Services', ['ServicesData'=>$ServicesData]);
    }
    public function Add(){
        return view('Services.add');
    }
    public function Store(Request $request){
        // dd('ok');
        $this->validate($request, [
            'service_name' => 'required',
            'service_img' => 'required:services_models,service_img'
        ]);
        $data = new ServicesModel();
        $data->service_name = $request->service_name;
        $data->service_des = $request->service_des;
        $data->service_img = $request->service_img;
        $data->save();
        return redirect()->route('services.view')->with('success', 'Data Inserted Successfully');
    }
    public function Edit($id){
        $ServicesData = ServicesModel::find($id);
        return view('Services.edit', compact('ServicesData'));
    }
    public function Update(Request $request, $id){
        $data = ServicesModel::find($id);
        $data->service_name = $request->service_name;
        $data->service_des = $request->service_des;
        $data->service_img = $request->service_img;
        $data->save();
        return redirect()->route('services.view')->with('success','Data Update Successfully');
    }
    public function Delete(Request $request, $id){
        $data = ServicesModel::find($id);
        $data->delete();
        return redirect()->route('services.view')->with('success','Data Delete Successfully');
    }
}
