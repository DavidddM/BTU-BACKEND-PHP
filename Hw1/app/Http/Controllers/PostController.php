<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post.posts')->with("posts", $posts);
    }

    public function show(Post $post) {
        return view("post.post")->with("post", $post);
    }

    public function create() {
        return view("post.create");
    }

    public function save(PostRequest $req) {
        $post = new Post($req->all());
        $post -> user_id = Auth::id();
        $post->save();
        return redirect()->action([\App\Http\Controllers\PostController::class, 'index']);
    }

    public function edit(Post $post) {
        return view("post.edit")->with("post", $post);
    }

    public function update(Request $request, Post $post) {
        $post -> update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->action([\App\Http\Controllers\PostController::class, 'index']);
    }
    public function user_posts(){
        $id = Auth::id();
        $user = User::find($id);
        $posts = $user->posts;
        return view('post/posts', ['posts' => $posts]);
    }
}
