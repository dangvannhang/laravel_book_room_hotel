<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function getServices() {
        $services = Service::all();
        return view('admin.service',compact('services'));
    }
    function create(){
        return view('admin.services.createService');
    }
    function addService(Request $request){
        $idService = $request->input('idService');
        $name = $request->input('name');
        $price = $request->input('price');
        // $image = $request->file('image')->getClientOriginalName();
        $image= $request->file('image')->store('public');
        $note = $request->input('note');

        $service = new Service();
        $service->id = $idService;
        $service->name = $name;
        $service->price = $price;
        $service->image ="/storage/".$image;
        $service->note = $note;
        $service->save();

        return redirect()->route('service')->with('alert','Thêm dịch vụ thành công!');;
    }
    function deleteService($id){
        db::table('services')->where('id','=',$id)->delete();
        return redirect()->route('service');
    }
    function editService($id){
        $getService = DB::table('services')->where('id','=',$id)->first();
        return view('admin.services.editService', compact('getService'));
    }
    function updateService($id, Request $request){
        $idService = $request->input('idService');
        $name = $request->input('name');
        $price = $request->input('price');
        $image= $request->file('image')->store('public');
        $note = $request->input('note');
        DB::table('services')->where('id','=',$id)->update(['id'=>$idService,'name'=>$name,'price'=>$price,'image'=>"/storage/".$image,'note'=>$note]);
        return redirect()->route('service')->with('alert','Cập nhật dịch vụ thành công!');;
    }
}
