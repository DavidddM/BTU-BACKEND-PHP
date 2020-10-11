<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts')->with("posts", $posts);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view("post")->with("post", $post);
    }

    public function create() {
        return view("create");
    }

    public function save(Request $req) {
        $post = new Post($req->all());
        $post->save();
        return redirect()->action([\App\Http\Controllers\PostController::class, 'index']);
    }
}
