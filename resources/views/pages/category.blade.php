@extends('layout')
@section('content')
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<h3>{{$title_category->title}}</h3>
					</div>
					<div class="about-two">
						<p>{{$title_category->short_desc}}</p>
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
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
                            {{$category_post->links()}}
						</div>
					</div>
				</div>
				<div class="col-md-4 about-right heading">
                <div class="abt-2">
                <div class="abt-2">
                <h3>Danh mục gợi ý</h3>
						<ul>
                            @foreach($category_recomment as $key => $cate_recom)
							<li><a href="{{route('danh-muc.show',['id'=>$cate_recom->id,'slug'=>Str::slug($cate_recom->title)])}}">{{$cate_recom->title}} </a></li>
                            @endforeach
						</ul>
					</div>
						<h3>Bài viết xem nhiều</h3>
                            @foreach($views_posts as $key =>$views)
                            <a href="{{route('bai-viet.show',['id'=>$views->id])}}">
							<div class="might-grid">
								<div class="grid-might">
								<img src="{{asset('uploads/'.$views->image)}}" class="img-responsive" alt="">
								</div>
								<div class="might-top">
									<h4><a href="{{route('bai-viet.show',['id'=>$views->id])}}">{{$views ->title}}</a></h4>
									<p>{!!substr($views->short_desc,0,150)!!}...</p>
								<a href="{{route('bai-viet.show',['id'=>$views->id])}}">Đọc tiếp...</a>
								</div>
								<div class="clearfix"></div>
							</div>
                            </a>
                            @endforeach
					</div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->

@endsection
