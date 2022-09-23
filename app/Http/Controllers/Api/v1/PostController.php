<?php

namespace App\Http\Controllers\Api\v1;

use App\Post;
use App\CategoryPost;
use Illuminate\Http\Request;
use Storage;
use File;
use Session;
class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category')->orderBy('id','DESC')->get();
        return view('layouts.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $category = CategoryPost::all();
        return view('layouts.post.create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title =$request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        if ($request['image']) {
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().''.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;

        }else{
            $post->image ='default.jpg';
        }
        $post->post_category_id = $request->post_category_id;


        $post->save();
        // return redirect()->back();
        return redirect()->route('post.index')->with('success','Bạn đã thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $path = 'uploads/';
        $post = Post::find($post);
        unlink($path.$post->image);
        $post->delete();
        return redirect()->route('post.index')->with('success','Bạn đã xóa bài viết thành công');
    }
}
