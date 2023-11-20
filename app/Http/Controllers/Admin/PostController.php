<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

use function GuzzleHttp\default_user_agent;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        return view('admin.posts.create');
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
}
