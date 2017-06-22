<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Position;

class PositionsController extends Controller
{
    //

    public function index(){

        $data = Position::orderBy('id', 'DESC')->get();

        return view('admin.pages.positions',compact('data'));
    }

    public function create(){
        return view('admin.pages.positionCreate');
    }

    public function store(Request $request){

        $position = new Position;

        $position->position_name = $request->name;

        $position->save();

        return redirect('positions');

    }

    public function destroy($id){

        $position = Position::find($id);

        $position->delete();

        return redirect('/positions');
    }
}
