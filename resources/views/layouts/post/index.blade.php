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
        <div class="col-md-18">
            <div class="card">
                <div class="card-header"> <h1 style="text-align:center;">Bài Viết</h1>
                <a href="{{url('/home')}}" class="btn btn-primary w-50">Trang Chủ</a>
                <a href="{{route('post.create')}}" class="btn btn-primary">Thêm bài viết</a >

                </div>
                <div class="card-body">
                    <table class="table">
                    <thead>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Mô tả ngắn</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Quản lý</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach($post as $p)
                        @php
                            $i++;
                        @endphp
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$p->title}}</td>
                        <td> <img width="200px" src="{{asset('/uploads/'.$p->image)}}"> </td>
                        <td>{!!$p->short_desc!!}</td>
                        <td>{{$p->category->title}}</td>
                        <td> <form action="{{route('post.destroy',[$p->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger mb-2 w-100" type="submit" value="Delete">
                        </form>
                         <a class="btn btn-warning btn-sm w-100" href="{{route('post.show',[$p->id])}}">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
