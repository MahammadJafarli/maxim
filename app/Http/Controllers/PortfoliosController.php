<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Work;

use App\Portfolio;

class PortfoliosController extends Controller
{
    public function index(){

        $data = Portfolio::orderBy('id', 'DESC')->get();

        return view('admin.pages.portfolios',compact('data'));
    }

    public function create(){

        $data = Work::all();

        return view('admin.pages.portfolioCreate',compact('data'));

    }

    public function store(Request $request){

        $portfolio = new Portfolio();

        $portfolio->name =  $request->name;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $portfolio->image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $portfolio->work_id = $request->work;

        $portfolio->save();

        return redirect('portfolios');

    }

    public function edit(Portfolio $portfolio){

        $data = Portfolio::find($portfolio);

        $portfolioData = Work::all();

        return view('admin.pages.portfolioEdit',compact('portfolio','data','portfolioData'));

    }

    public function update(Request $request,$portfolio){

        $portfolio = Portfolio::find($portfolio);

        $portfolio->name = $request->name;

        $portfolio->work_id = $request->work;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $portfolio->image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $portfolio->save();

        return redirect('/portfolios');

    }

    public function destroy($id){

        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        return redirect('/portfolios');
    }

}
