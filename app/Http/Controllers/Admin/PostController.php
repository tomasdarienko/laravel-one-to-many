<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller; 
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $form_data =$request->all();
        $post = new Post();
        // $post->title=$form_data['title'];
        // $post->description = $form_data['description'];
        // $post->owner = $form_data['owner'];
        // $post->slug = $slug;
        
        if($request->hasFile('cover_image')){

            $path= Storage::disk('public')->put('posts_image',$form_data['cover_image']);
            $form_data['cover_image'] = $path;
        }
        $slug = Str::slug($form_data['title'],'-');
        $form_data['slug']= $slug;
        $post->fill($form_data);
        $post-> save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $form_data = $request->all();

        // $Post = Post::find($id);
        // $post->title = $form_data['title'];
        // $post->description = $form_data['description'];
        // $post->owner = $form_data['owner'];
        // $slug = Str::slug($form_data['title'],'-');
        // $post->slug = $slug;

        $slug = Str::slug($form_data['title'],'-');
        $form_data['slug']= $slug;
        $post-> update($form_data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
