@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>K-POP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
            <p class='updated_at'>{{ $post->updated_at }}</p>
            <p >アイドルは{{ $post->idol->name }}</p>
        </div>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
    　  <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">削除</span>]</p>
        </form>
        <div class='post'>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
        <script>
            function deletePost(e){
                'use strict';
                if (confirm('削除すると復元できません。 \n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
        
    </body>
</html>
@endsection
