<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class ConcursosController extends Controller
{
    
     public function home (){

        $posts = Post::all();

    return view('welcome',compact('posts'));
   }
}
