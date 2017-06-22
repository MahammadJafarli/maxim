<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoriesController extends Controller
{
    public function index(){

        $data = Category::orderBy('id', 'DESC')->get();

        return view('admin.pages.categories',compact('data'));

    }

    public function create(){

        return view('admin.pages.categoryCreate');
    }

    public function store(Request $request){

        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect('categories');

    }

    public function destroy($id){

        $category = Category::find($id);

        $category->delete();

        return redirect('/categories');
    }
}
