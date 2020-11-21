@extends("layout.layout")
@section("content")
    <div style="width: 450px; margin:0 auto;">
        <form  method="post" enctype="multipart/form-data" action="{{route('posts.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="name" class="form-control"  placeholder="Title" name="postTitle">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Text</label>
                    <textarea type="text" class="form-control"  placeholder="Text" name="postContent"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Likes</label>
                    <input type="name" class="form-control"  placeholder="Likes" name="postLikes">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Tags</label>
                    <select name="tags[]" id="" multiple>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @csrf
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
