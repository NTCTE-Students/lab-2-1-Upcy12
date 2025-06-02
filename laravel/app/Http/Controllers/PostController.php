<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function edit(Post $post){
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request){
        
        $post_id = $request->validate([
            'post_id' =>  '',
        ]);
        $post_info = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::find($post_id['post_id']);
        $post->title = $post_info['title'];
        $post->content = $post_info['content'];
        $post->save();

        return redirect()->route('posts.index');
    }

    public function delete(Post $post){
        $del_post = Post::find($post['id']);
        $del_post->delete();

        return redirect()->route('posts.index');
    }

    public function show_post(Post $post){
        $current_post = Post::find($post['id']);

        return view('posts.show_post',[
            'post' => $post
        ]);
    }
}
