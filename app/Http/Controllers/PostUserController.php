<?php

namespace App\Http\Controllers;

use App\PostUser;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function store($postId){
        $user  = Auth::user();
        if(!$user->is_post_user($postId)){ //既にブックマークしているかをチェック
            $user->post_user_posts()->attach($postId);
        }
        return back(); //元のページに戻る
    }
    public function destroy($postId){
        $user = Auth::user();
        if(!$user->is_post_user($postId)){
            $user->post_user_posts()->detach($postId);
        }
        return back();
    }
}
