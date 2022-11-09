<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Alert;

class BlogController extends Controller
{

    public function index()
    {
        return view('frontend.blogs.index');
    }


    public function create()
    {
        return view('backend.blogs.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'required|image|mimes:png,jpg',
            'title' => 'required|',
            'summary' => 'required',
            'body' => 'required'
        ]);

        $filename = time() . '.' . $request->image->extension();
        // dd(public_path('assets/frontend/img/news/news-feeds/'));
        $request->image->move(public_path('assets/backend/images/blog/posts/'), $filename);

        Post::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'description' => $request->body,
            'img' => 'assets/frontend/img/news/news-feeds/' . $filename
        ]);

        Alert::success("Post Created Successfully!", "Kudos! Your post has been published");

        return redirect()->back();
    }
}
