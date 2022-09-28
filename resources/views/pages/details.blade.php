@extends('layout')
@section('content')
	<!--start-single-->
	<div class="single">
		<div class="container">
        <div class="col-md-8">
            <style type="text/css">
                .single-top .single-post img{
                    width: 100% !important;
                }
            </style>
				<div class="single-top single-post">
					<div class=" single-grid">
						<h4 style="text-align: center; font-weight: bold; font-size: 30px; font-family: sans-serif">{{$post->title}}</h4>
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
                                <li><a href="#"><span> <i  class="glyphicon glyphicon-eye-open"> </i>Views: {{$post->views}}</span> </a> </li>
                                <li><a href="#"><span> <i  class="glyphicon glyphicon-time"> </i>Date: {{$post->post_date}}</span> </a> </li>
		  					</ul>
                              <a href="#"><img class="img-responsive" src="{{'/uploads/'.$post->image}}" alt=" "></a>
                            {!!$post->desc!!}
					</div>
    				<div class="comment-bottom heading">
    					<h3>Bình luận về bài viết</h3>
    					<form>
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input type="submit" value="Gửi bình luận">
					</form>
    				</div>
				</div>
                </div>
                <div class="col-md-4">
                <div class="abt-2 about-right heading">
						<h3>Bài viết liên quan</h3>
                            @foreach($post_related as $key =>$new)
                            <a href="{{route('bai-viet.show', ['id'=>$new->id])}}">
							<div class="might-grid">
								<div class="grid-might">
								<img src="{{asset('uploads/'.$new->image)}}" class="img-responsive" alt="">
								</div>
								<div class="might-top">
									<h4><a href="{{route('bai-viet.show', ['id'=>$new->id])}}">{{$new ->title}}</a></h4>
									<p>{!!substr($new->short_desc,0,150)!!}...</p>
								<a href="{{route('bai-viet.show',['id'=>$new->id])}}">Đọc tiếp...</a>
								</div>
								<div class="clearfix"></div>
							</div>
                            </a>
                            @endforeach
					</div>
                </div>
			</div>
	</div>
	<!--end-single-->
@endsection
