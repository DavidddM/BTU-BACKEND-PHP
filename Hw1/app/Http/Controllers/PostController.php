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

    public function show(Post $post) {
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

    public function edit(Post $post) {
        return view("edit")->with("post", $post);
    }

    public function update(Request $request, Post $post) {
        $post -> update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->action([\App\Http\Controllers\PostController::class, 'index']);
    }
}
