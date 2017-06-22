<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

//use App\Category;

class BlogsController extends Controller
{

    public function index(){

        $data = Post::orderBy('id', 'DESC')->get();

        return view('admin.pages.blogs',compact('data'));
    }

    public function create(){

        $data = Category::all();

        return view('admin.pages.blogCreate',compact('data'));
    }


    public function store(Request $request){

        $blog = new Post();

        $blog->post_title= $request->title;

        $blog->post_text = $request->text;

        $blog->category_id = $request->category;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $blog->post_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $blog->save();

        return redirect('blogs');
    }

    public function edit(Post $blog){

        $data = Post::find($blog);

        $categoryData = Category::all();

        return view('admin.pages.blogEdit',compact('blog','data','categoryData'));

    }

    public function update(Request $request,$blog){

        $blog = Post::find($blog);

        $blog->post_title = $request->title;

        $blog->post_text = $request->text;

        $blog->category_id = $request->category;


        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $blog->post_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $blog->save();

        return redirect('/blogs');

    }

    public function destroy($id){

        $blog = Post::find($id);

        $blog->delete();

        return redirect('/blogs');
    }
}
