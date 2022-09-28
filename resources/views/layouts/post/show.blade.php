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

                <div class="card-header"> <h1 style="text-align:center;"> Cập nhật bài viết </h1>
                <div style="margin-left:15%;">
                <a href="{{url('/home')}}" class="btn btn-dark" style="width: 30%;">Trang Chủ</a>
                <a href="{{route('post.create')}}" class="btn btn-dark" style="width: 30%;">Thêm bài viết</a >
                <a href="{{route('post.index')}}" class="btn btn-dark" style="width: 30%;">Danh sách bài viết</a >
                </div>
                </div>


                <div class="card-body">
                    <form autocomplete="off" method="POST" action="{{route('post.update',[$post->id])}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" value="{{$post->title}}" class="w-20 form-control " name="title">
                        <label for="title">Lượt xem</label>
                        <input type="text" value="{{$post->views}}" class="w-20 form-control " name="views">
                        <label for="title">Hình ảnh</label>
                        <input type="file" class="form-control" name="image">
                        <p class="mt-2"><img width="200px" src="{{asset('/uploads/'.$post->image)}}"></p>
                        <label for="title">Mô tả ngắn</label>
                        <textarea name="short_desc" id="ckeditor_shortdesc"  rows="5" class="form-control" style="resize: none;">{{$post->short_desc}}</textarea>
                        <label for="title">Nội dung</label>
                        <textarea  name="desc" id="ckeditor_desc"  rows="5" class="form-control" style="resize: none;">{{$post->desc}}</textarea>
                        <label for="title">Danh mục bài viết</label>
                        <select name="post_category_id" class="form-control">
                            @foreach($category as $key => $cate)
                        <option {{ $cate -> id==$post->post_category_id ? 'selected' : ' '}} value="{{$cate->id}}" >{{$cate->title}}</option>
                            @endforeach
                        </select>
                        <input type="submit" name="capnhatbaiviet" class="btn btn-success mt-2" value="Cập nhật bài viết">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
