@extends("layout.layout")
@section("content")
    <div style="width: 450px; margin:0 auto;">
        <form  method="post" enctype="multipart/form-data" action="{{route('tags.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control"  placeholder="Name" name="name">
                </div>
            </div>
            @csrf
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
