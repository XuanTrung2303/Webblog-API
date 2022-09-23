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
                <div class="card-header"><a href="{{url('/home')}}"><- Back</a> Thêm danh mục bài viết</div>

                <div class="card-body">
                    
                    <form autocomplete="off" method="POST" action="{{route('category.store')}}">
                        @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" placeholder="Tiêu đề" class="w-20 form-control " name="title">
                        <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
