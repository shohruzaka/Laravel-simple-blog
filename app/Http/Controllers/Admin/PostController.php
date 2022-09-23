<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        // dd($posts->categories); 
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::pluck('title', 'id')->all();
        // dd($cat);
        $tag = Tag::pluck('title', 'id')->all();
        return view('admin.posts.create', compact('cat', 'tag'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'descript' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'image'
        ]);



        $data = $request->all();
        // dd($data);
        if ($request->hasFile('thumbnail')) {
            $folder = date('Y-m-d');
            $data['thumbnail'] = $request->file('thumbnail')->store("img/{$folder}");
        }

        $post = Post::create($data);
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', "Post added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $post->toArray();
        $cat = Category::pluck('title', 'id')->all();
        // dd($cat);
        $tag = Tag::pluck('title', 'id')->all();
        return view('admin.posts.edit', compact('post', 'tag', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'descript' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'image'
        ]);

        $post = Post::find($id);
        
        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            Storage::delete($post->thumbnail);
            $folder = date('Y-m-d');
            $data['thumbnail'] = $request->file('thumbnail')->store("img/{$folder}");
        }
        
        $post->update($data);
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success',"Post updated succesfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->sync([]);
        $post->delete();
        Storage::delete($post->thumbnail);
        Post::destroy($id);

        return redirect()->route('posts.index')->with('success', 'Post deleted');
    }
}
