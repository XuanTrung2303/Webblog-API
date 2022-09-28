@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1 style="text-align:center;"> Cập nhật danh mục bài viết </h1>
                <div style="margin-left:15%;">
                <a href="{{url('/home')}}" class="btn btn-dark" style="width: 30%;">Trang Chủ</a>
                <a href="{{route('category.create')}}" class="btn btn-dark" style="width: 30%;">Thêm danh mục</a >
                <a href="{{route('category.index')}}" class="btn btn-dark" style="width: 30%;">Danh sách danh mục</a >
                </div>
                </div>
                <div class="card-body">

                    <form autocomplete="off" method="POST" action="{{route('category.update',[$category->id])}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" value="{{$category->title}}" class="w-20 form-control " name="title">
                        <label for="title">Mô tả danh mục</label>
                        <textarea placeholder="Mô tả danh mục" class="form-control " name="short_desc" rows="5" style="resize: none;">{{$category->short_desc}}</textarea>
                        <input type="submit" name="themdanhmuc" class="btn btn-success mt-2" value="Cập nhật">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
