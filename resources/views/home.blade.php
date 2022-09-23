@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <!-- <a href="{{route('category.create')}}" class="btn btn-primary w-75 mb-2 ml-5">Thêm danh mục bài viết</a> -->
                <a href="{{route('category.index')}}" class="btn btn-primary w-75 mb-2 ml-5">Danh mục bài viết</a>
                <!-- <a href="{{route('post.create')}}" class="btn btn-success w-75 mb-2 ml-5">Thêm bài viết</a > -->
                <a href="{{route('post.index')}}" class="btn btn-success w-75 mb-2 ml-5">Danh sách bài viết</a >
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
