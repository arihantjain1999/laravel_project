<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {

    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->name=$request->get('name');
        $post->email=$request->get('email');
        $post->phone=$request->get('phone');
        $post->dob=$request->get('dob');
        $post->gender=$request->get('gender');
        $post->language=$request->get('language');
        $post->save();
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Post $post)
    {
        $posts=Post::all();
        return view('show',['posts'=>$posts]);
    }
    // showing single record 
    public function single(Post $post,$id)
    {
        $posts=Post::find($id);
        return view('single',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$id)
    {
        $posts=Post::find($id);
        return view('edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post ,$id)
    {
        $posts=Post::find($id);
        $posts->name=$request->get('name');
        $posts->email=$request->get('email');
        $posts->phone=$request->get('phone');
        $posts->dob=$request->get('dob');
        $posts->gender=$request->get('gender');
        $posts->language=$request->get('language');
        $posts->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post , $id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('show');
    }
}
