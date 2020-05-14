<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Http\Requests\PostRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts=Post::latest()->get();
        return view('home')->with('posts', $posts);
    }

    public function show(Post $post)
    // public function show(Post $post)
    {
        // $post = Post::where('post_id', $post_id)->firstOrFail();
        return view('show')->with('post', $post);
    }

    public function create()
    {
        // return view('posts.index')->with('posts', $posts);
        return view('create');
    }

    public function store(PostRequest $request)
    {
        $post=new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        // $post->picURL_1 = null;
        // $post->picURL_2 = null;
        // $post->picURL_3 = null;
        // $post->picURL_4 = null;
        // $post->picURL_5 = null;
        $post->save();
        return redirect('/albumForShare');
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        // $post->picURL_1 = null;
        // $post->picURL_2 = null;
        // $post->picURL_3 = null;
        // $post->picURL_4 = null;
        // $post->picURL_5 = null;
        $post->save();
        return redirect('/albumForShare');
    }

    public function edit(Post $post)
    {
        return view('edit')->with('post', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/albumForShare');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
