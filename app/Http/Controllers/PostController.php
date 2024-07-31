<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'username' => 'required',
        ]);

        $data = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'date' => Carbon::now(),
            'username' => $request->username,
        ]);

        if($data){
            return redirect()->route('post.index')->with([
                'status' => 'Failed',
                'message' => 'Post created Failed',
            ]);
        }
        return redirect()->route('post.index')->with([
            'status' => 'Success',
            'message' => 'Post created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('idPost', $id)->get()->first();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('idPost', $id)->get()->first();
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'username' => 'required',
        ]);

        $post = Post::where('idPost', $id);

        $data = $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'date' => Carbon::now(),
            'username' => $request->username,
        ]);

        if($data){
            return redirect()->route('post.index')->with([
                'status' => 'Failed',
                'message' => 'Post Edited Failed',
            ]);
        }
        return redirect()->route('post.index')->with([
            'status' => 'Success',
            'message' => 'Post Edited successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::where('idPost', $id);
        $data->delete();
        return redirect()->route('post.index')->with([
            'status' => 'Success',
            'message' => 'Post Deleted successfully',
        ]);
    }
}
