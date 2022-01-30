<?php

namespace App\Http\Controllers;

use App\Post;
use App\Idol;
use App\User;
use App\Revision;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post, Revision $revisions)
    {
        $revisions = Revision::all();
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(),'revisions' => $revisions]);
        
    }
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create(Idol $idol)
    {
        return view('posts/create')->with(['idols' =>$idol->get()]);
    }
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }   
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        
        return redirect('/posts/' . $post->id);
    }
    
    
    public function delete(Post $post)
    {
       $post->delete();
       return redirect('/');
    }
    
    public function bookmark(Post $post , User $user)
    {
        return view('posts/bookmark')->with(['posts' => $post , 'user' => $user]);
    }
    
    
    
}
?>