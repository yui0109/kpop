<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Post $post)
    {
        $post->users()->attach(Auth::id());

        return redirect('/');
    }



public function destroy(Post $post)
    {
        $post->users()->detach(Auth::id());

        return redirect('/');
    }
}
