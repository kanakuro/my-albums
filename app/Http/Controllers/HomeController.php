<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

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
    {
        $user = Auth::user();
        return view('show', ['post'=>$post, 'user'=> $user]);
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

        // $params = $request->validate([
        //     'image1' => 'required|file|image|max:4000',
        //     'image2' => 'required|file|image|max:4000',
        //     'image3' => 'required|file|image|max:4000',
        //     'image4' => 'required|file|image|max:4000',
        //     'image5' => 'required|file|image|max:4000',
        // ]);
        
        $disk = Storage::disk('s3');
        for ($i = 1; $i <= 5; $i++) {
            $post_var_name = 'postPic' . $i;
            $path_var_name = 'path' . $i;
            $image_name = 'image' . $i;
            $param_name = 'pic' . $i;
            $$post_var_name = $request->$image_name;
            if (empty($$post_var_name)) {
                $$path_var_name = null;
                $post->$param_name = null;
            } else {
                $$path_var_name = $disk->put('/postPics', $$post_var_name, 'public');
                $post->$param_name = $disk->url($$path_var_name);
            }
        }

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
