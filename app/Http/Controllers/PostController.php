<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();
        //return response()->json($posts);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('post.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $data = array();
        $data['title'] = $request->get('title');
        $data['body'] = $request->get('body');
        $post = Post::create($data);
        $post->tags()->attach($request->get('tag'));
        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->with('tags')->first();
        $post->tags()->detach($post->tags);
        $post->delete();
        return redirect()->back();
    }
}
