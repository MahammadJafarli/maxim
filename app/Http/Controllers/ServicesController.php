<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

class ServicesController extends Controller
{
    //
    public function index(){

//        $data = Service::all();

        $data = Service::orderBy('id', 'DESC')->get();


        return view('admin.pages.service',compact('data'));
    }

    public function create(){
        return view('admin.pages.serviceCreate');
    }

    public function store(Request $request){

        $service = new Service;

        $service->service_title = $request->title;

        $service->service_description = $request->description;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $service->service_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $service->save();

        return redirect('service');
    }

    public function edit(Service $service){

        $data = Service::find($service);

        return view('admin.pages.serviceEdit',compact('service','data'));

    }

    public function update(Request $request,$service){

        $service = Service::find($service);

        $service->service_title = $request->title;

        $service->service_description = $request->description;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $service->service_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $service->save();

        return redirect('/service');

    }

    public function destroy($id){

        $service = Service::find($id);

        $service->delete();

        return redirect('/service');
    }
}
