@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.blogs.update',$blog)}}">
            @csrf
            @method("PUT")
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Edit Blog : {{ $blog->title }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-12 p-2">
                        <div class="col-12">
                            tilte
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="title" required maxlength="190" class="form-control" value="{{ $blog->title }}">
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            Image
                        </div>
                        <div class="col-12 pt-3">
                            <img src="{{'/blog/'.$blog->image}}" style="width: 100px; height: 100px;">
                            <input type="file" name="image" maxlength="190" class="form-control">
                        </div>
                        <div class="col-12 pt-3">
                        </div>
                    </div>
                    <div class="col-12  p-2">
                        <div class="col-12">
                            Blog
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="blog" class="editor with-file-explorer">{{ $blog->blog }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <button class="btn btn-success" id="submitEvaluation">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
