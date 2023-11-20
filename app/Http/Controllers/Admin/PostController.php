<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

use function GuzzleHttp\default_user_agent;

class PostController extends Controller
{
    public function index()
    {   $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.view', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function store(Request $request)
    {
        $postFields = $request->validate([
            'title' => 'required',
            'donation_goal' => 'required',
            'tags' => 'required',
            'stories' => 'required',
        ]);

        if($request->hasFile('images')) {
            $postFields['images'] = $request->file('images')->store('Story Images', 'public');
        }

        Post::create($postFields);
        
       return to_route('admin.posts.index');
    }


    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
             'title' => 'required',
             'donation_goal' => 'required',
             'stories' => 'required',
            ]);
        
        $post->update($validated);

        return to_route('admin.posts.index');
    }

}
