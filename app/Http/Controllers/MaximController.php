<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;

use App\Service;

use App\Team;

use App\Portfolio;

use App\Post;


class MaximController extends Controller
{
    public function index(){

        $about = About::all();

        $service = Service::orderBy('id', 'DESC')->take(4)->get();

        $team = Team::orderBy('id','DESC')->take(5)->get();

        $portfolio = Portfolio::orderBy('id','DESC')->take(10)->get();

        $blog = Post::orderBy('id','DESC')->take(4)->get();

        return view('maxim', compact('about','service','team','portfolio','blog'));
    }

    public function single($id){

        $blog = Post::find($id);

        return view("singleBlog",compact('blog'));

    }

    public function sendEmailReminder(Request $request, $id){
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('maximtemp01@gmail.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
}
