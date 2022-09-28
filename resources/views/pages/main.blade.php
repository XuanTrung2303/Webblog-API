	@extends('layout')
    @section('content')
<!-- banner start -->
    @include('pages.banner')
<!-- banner end -->
    <!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
                <div class="about-tre">
						<div class="a-1">
                            @foreach($all_post as $key => $post)
                            <div class="row" style="margin:5px;">
                            <a href="{{route('danh-muc.show',['id'=>$post->category->id,'slug'=>Str::slug($post->category->title)])}}"><h6>{{$post->category->title}}</h6></a>
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
						</div>
                </div>
                <div style="margin: 5px;">
            {{ $all_post->links() }}</div>
        </div>
				</div>
				<div class="col-md-4 about-right heading">
					<div class="abt-2">
						<h3>Bài viết mới nhất</h3>
                            @foreach($newest_post as $key =>$new)

							<div class="might-grid">
                            <a href="{{route('danh-muc.show',['id'=>$new->category->id,'slug'=>Str::slug($new->category->title)])}}"><h6>{{$new->category->title}}</h6></a>
                            <a href="{{route('bai-viet.show', ['id'=>$new->id])}}">
								<div class="grid-might">
								<img src="{{asset('uploads/'.$new->image)}}" class="img-responsive" alt="">
								</div>
								<div class="might-top">
									<h4><a href="{{route('bai-viet.show', ['id'=>$new->id])}}">{{$new ->title}}</a></h4>
									<p>{!!substr($new->short_desc,0,150)!!}...</p>
								<a href="{{route('bai-viet.show',['id'=>$new->id])}}">Đọc tiếp...</a>
								</div>
								<div class="clearfix"></div>
                                </a>
							</div>
                            @endforeach
					</div>
					<div class="abt-2">
						<h3>Bài viết xem nhiều</h3>
						<ul>
                            @foreach ($newest_post as $key => $views)
							<li><a href="{{route('bai-viet.show', ['id'=>$views->id])}}">{{$views->title}}</a></li>
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
