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

                <div class="card-header"> <h1 style="text-align:center;"> Thêm danh mục bài viết </h1>
                <div style="margin-left:15%;">
                <a href="{{url('/home')}}" class="btn btn-dark" style="width: 40%;">Trang Chủ</a>
                <a href="{{route('category.index')}}" class="btn btn-dark" style="width: 40%;"> Danh mục bài viết</a >
                </div>
                </div>
                <div class="card-body">

                    <form autocomplete="off" method="POST" action="{{route('category.store')}}">
                        @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" placeholder="Tiêu đề" class="w-20 form-control " name="title">
                        <label for="title">Mô tả danh mục</label>
                        <textarea placeholder="Mô tả danh mục" class="form-control " name="short_desc" rows="5" style="resize: none;"></textarea>
                        <input type="submit" name="themdanhmuc" class="btn btn-success mt-2" value="Thêm">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
