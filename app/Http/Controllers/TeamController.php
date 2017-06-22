<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Team;

use App\Position;

class TeamController extends Controller
{
    public function index(){

        $data = Team::orderBy('id', 'DESC')->get();

        return view('admin.pages.team',compact('data'));
    }

    public function create(){

        $data = Position::all();

        return view('admin.pages.memberCreate',compact('data'));
    }

    public function store(Request $request){

        $team = new Team();

        $team->name = $request->name;

        $team->surname = $request->surname;

        $team->position_id = $request->position;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $team->avatar = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $team->save();

        return redirect('team');
    }

    public function destroy($id){

        $team = Team::find($id);

        $team->delete();

        return redirect('/team');
    }

    public function edit(Team $team){

        $data = Team::find($team);

        $positionData = Position::all();

        return view('admin.pages.memberEdit',compact('team','data','positionData'));

    }

    public function update(Request $request,$team){

        $team = Team::find($team);

        $team->name = $request->name;

        $team->surname = $request->surname;

        $team->position_id = $request->position;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $team->avatar = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $team->save();

        return redirect('/team');

    }
}
