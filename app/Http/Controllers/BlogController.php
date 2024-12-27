<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writeup;

class BlogController extends Controller
{
    public function writeups(){
        return view('blog.writeup');
    }

    public function create(){
        return view('blog.createblog');
    }

    public function viewwriteup(){
        $posts = Writeup::orderBy('created_at','desc')->get();
        return view('blog.viewwriteup',['posts'=> $posts]);
    }

    public function storepost(Request $request){
        $validator = $request->validate([
            'title' => 'required|string|max:120',
            'posts' => 'required|string|max:500',
            'category' => 'required|string|max:20'
        ]);

        if(!$validator){
            return redirect('writeups')->withInput()->withErrors($validator);
        }

        Writeup::create([
            'user_id'=>$request->user()->id,
            'title' => $request->title,
            'posts'=>$request->posts,
            'category' => $request->category
        ]);

        return redirect('writeups')->withSuccess('Posted Successfully');
    }

    public function viewpost(){
        $posts = Writeup::all();
        return view('writeups',['posts'=> $posts]);
    }
}
