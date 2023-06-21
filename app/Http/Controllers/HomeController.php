<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag; 
use App\Models\Post;
class HomeController extends Controller
{
 
    public function index()
    {
        $tags=Tag::all();
        $category=Category::all();

        $last=Post::latest('id')->first();
        $posts = Post::orderBy('id','desc')->paginate(3);
        return view('index',compact(['tags','category','posts','last']));
    }

    public function post($id){ 
        $category=Category::all(); 
        $tags=Tag::all();
        $post=Post::find($id);
        $post->views += 1;
        $post->update();
        return view('post',compact(['post','category','tags']));

    }
  
}
