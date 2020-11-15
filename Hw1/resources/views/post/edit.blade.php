@extends("layout.layout")
@section("content")
    <div style="width: 450px; margin:0 auto;">
        <form method="post" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="name" class="form-control"  placeholder="Title" name="postTitle" value="{{old('postTitle', $post->postTitle)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Text</label>
                    <textarea type="text" class="form-control"  placeholder="Text" name="postContent">{{old('postContent', $post->postContent)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Likes</label>
                    <input type="name" class="form-control"  placeholder="Likes" name="postLikes" value="{{old('postLikes', $post->postLikes)}}">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
