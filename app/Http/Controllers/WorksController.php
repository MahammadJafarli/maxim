<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Work;

class WorksController extends Controller
{
    public function index(){

        $data = Work::orderBy('id', 'DESC')->get();

        return view('admin.pages.works',compact('data'));
    }

    public function create(){

        return view('admin.pages.workCreate');
    }

    public function store(Request $request){

        $work = new Work;

        $work->work_name = $request->name;

        $work->save();

        return redirect('works');

    }

    public function destroy($id){

        $work = Work::find($id);

        $work->delete();

        return redirect('/works');
    }
}
