@extends('layout')
@section('content')
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<h3>Từ khóa tìm kiếm: {{$keywords}}</h3>
					</div>
					<div class="about-tre">
						<div class="a-1">
                            @foreach($category_post as $key => $post)
                            <a href="{{route('danh-muc.show',['id'=>$post->category->id,'slug'=>Str::slug($post->category->title)])}}"><h6>{{$post->category->title}}</h6></a>
                            <div class="row" style="margin:5px;">
                            <a href="{{route('bai-viet.show',['id'=>$post->id])}}">
							<div class="col-md-6 abt-left" >
								<img src="{{asset('uploads/'.$post->image)}}" alt="{{Str::slug($post->title)}}" />

                            </div>
                            <div class="col-md-6 abt-left">

								<h5>{{$post->title}}</h5>
								<p>{!!$post->short_desc!!}</p>
								<label>{{$post->post_date}}</label>
								<a href="{{route('bai-viet.show',['id'=>$post->id])}}">Đọc tiếp...</a>

							</div>
                            </a>
                            </div>

                            @endforeach
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 about-right heading">
                <div class="abt-2">
                <div class="abt-2">
                <h3>Danh mục gợi ý</h3>
						<ul>
                            @foreach($category as $key => $cate_recom)
							<li><a href="{{route('danh-muc.show',['id'=>$cate_recom->id,'slug'=>Str::slug($cate_recom->title)])}}">{{$cate_recom->title}} </a></li>
                            @endforeach
						</ul>
					</div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->

@endsection
