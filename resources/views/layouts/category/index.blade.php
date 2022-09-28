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
                <div class="card-header"> <h1 style="text-align:center;"> Danh mục bài viết </h1>
                <div style="margin-left:15%;">
                <a href="{{url('/home')}}" class="btn btn-dark" style="width: 40%;">Trang Chủ</a>
                <a href="{{route('category.create')}}" class="btn btn-dark" style="width: 40%;">Thêm danh mục</a >
                </div>
                </div>
                <div class="card-body">
                    <table class="table">
                    <thead>

                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Quản lý</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach($category as $categories)
                        @php
                            $i++;
                        @endphp
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$categories->title}}</td>
                        <td>{{$categories->short_desc}}</td>
                        <td> <form action="{{route('category.destroy',[$categories->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger mb-2 w-50" type="submit" value="Delete">
                        </form>
                         <a class="btn btn-warning btn-sm w-50" href="{{route('category.show',[$categories->id])}}">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection
