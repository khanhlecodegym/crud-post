<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $posts = Post::all();
            return view('posts.index', compact('posts'));
        }

        return redirect('/login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required | min:3',
            'content' => 'required',
            'image_post' => 'required|image|mimes:jpeg,jpg,png'
            ]);


        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->user_id = Auth::user()->id;
        $post->user_update_id = Auth::user()->id;
        $post->image = base64_encode(file_get_contents($request->file('image_post')->getRealPath()));


        $post->save();

        if(request('tag')) {
            $post->tags()->attach(request('tag'));
        }

        return redirect('/posts/create')->with('success', 'Tạo mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.detail', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        // dd($post->tags->toArray());
        // $selected = $post->tags->lists('id');


        return view('posts.edit', compact(['tags', 'post']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    //    dd(Auth::user()->id);
        $this->validate($request, [
            'title' => 'required | min:3',
            'content' => 'required',
            'image_post' => 'image|mimes:jpeg,jpg,png'
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        if($request->file('image_post')) {
            $post->image = base64_encode(file_get_contents($request->file('image_post')->getRealPath()));
        }
        $post->save();
        $post->tags()->sync(request('tag'));

        return redirect('/posts')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')->with('success', 'Xóa thành công');
    }
}
