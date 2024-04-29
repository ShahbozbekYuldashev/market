<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(3);
//        cbbchdhh

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $path = $request->file('photo')->store('images', 'public');


        $blog = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'short_content' => $request->short_content,
            'photo' => $path,
        ]);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $blog)
    {
        return view("posts.show")->with([
            'blog' => $blog,
            'recent_posts' => Post::latest()->get()->except($blog->id)->take(6),
            ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $blog)
    {
       return view('posts.edit')->with(['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $blog)
    {
        $path = $request->file('photo')->store('images', 'public');
        if ($request->hasFile('photo')) {
            if(isset($blog->photo)) {
                Storage::delete($blog->photo);
            }
        }

        $blog->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'body' => $request->body,
            'photo' => $path ?? $blog->photo,
        ]);

        return redirect()->route('blog.show', ['blog' => $blog->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $blog)
    {
            if(isset($blog->photo)) {
                Storage::delete($blog->photo);
            }
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
