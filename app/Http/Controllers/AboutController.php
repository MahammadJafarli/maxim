<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;

class AboutController extends Controller
{
    //
    public function index(){

        $data = About::all();

        return view('admin.pages.about',compact('data'));
    }

    public function create(){
        return view('admin.pages.aboutCreate');
    }

    public function store(AboutRequest $request){

        $about = new About;

        $about->about_title = $request->title;

        $about->about_text = $request->text;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $about->about_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $about->save();

        return redirect('about');

    }

    public function edit(About $about){

        $data = About::find($about);

        return view("admin.pages.aboutEdit",compact('about','data'));

    }

    public function update(AboutRequest $request,$about){

        $about = About::find($about);

        $about->about_title = $request->title;

        $about->about_text = $request->text;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $about->about_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $about->save();

        return redirect('/about');

    }
}
