@extends("layout.layout")
@section("content")
    <div style="width: 450px; margin:0 auto;">
        <form method="post" enctype="multipart/form-data" action="{{route('tags.update', $tag->id)}}">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" placeholder="Title" name="name"
                           value="{{old('name', $tag->name)}}">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
