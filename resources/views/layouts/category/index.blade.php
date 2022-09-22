@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('/home')}}"><- Back</a> Danh mục bài viết</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Quản lý</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $categories)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$categories->title}}</td>

                        <td> <form action="{{route('category.destroy',[$categories->id])}}" method="POST"> 
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger mb-2 w-50" type="submit" value="Delete">
                        </form> 
                        <form action="{{route('category.edit',[$categories->id])}}" method="POST"> 
                            @method('PUT')
                            @csrf
                            <input class="btn btn-success w-50" type="submit" value="Edit">
                        </form>       
                         <!-- <a href="{{route('category.edit',[$categories->id])}}">Edit</a>-->
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
