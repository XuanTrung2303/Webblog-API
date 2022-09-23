@extends('layouts.app')

@section('content')
<div class="container">
@if (Session::has('success'))
    <div class="alert alert-success">
    <p>{{Session::get('success')}}</p>
    </div>
    @endif
    @if (Session::has('failure'))
    <div class="alert alert-danger">
    <p>{{Session::get('failure')}}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('/home')}}"><- Back</a> Thêm bài viết</div>

                <div class="card-body">
                    <form autocomplete="off" method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" placeholder="Tiêu đề..." class="w-20 form-control " name="title">
                        <label for="title">Hình ảnh</label>
                        <input type="file" class="form-control" name="image">
                        <label for="title">Mô tả ngắn</label>
                        <textarea name="short_desc" id="ckeditor_shortdesc" placeholder="Mô tả ngắn..." rows="5" class="form-control" style="resize: none;"></textarea>
                        <label for="title">Nội dung</label>
                        <textarea  name="desc" id="ckeditor_desc" placeholder="Nội dung..." rows="5" class="form-control" style="resize: none;"></textarea>
                        <label for="title">Danh mục bài viết</label>
                        <select name="post_category_id" class="form-control">
                            @foreach($category as $key => $cate)
                        <option value="{{$cate->id}}">{{$cate->title}}</option>
                            @endforeach
                        </select>
                        <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm bài viết">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
