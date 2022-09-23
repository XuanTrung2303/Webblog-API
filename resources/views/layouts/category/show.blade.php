@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('/home')}}"><- Back</a> Cập nhật danh mục bài viết</div>

                <div class="card-body">

                    <form autocomplete="off" method="POST" action="{{route('category.update',[$category->id])}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" value="{{$category->title}}" class="w-20 form-control " name="title">
                        <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Cập nhật">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
