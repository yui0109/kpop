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
       {{Auth::user()->name}}
     
   
     
       @foreach ($articles as $article)

    <div class="post-title"><a href="{{ route('posts/show', $post) }}">{{ $post->title }}</a></div>
    <div class="post-info">
        {{ $post->created_at }}｜{{ $post->user->name }}
    </div>
    <div class="post-control">
        @if (!Auth::user()->is_bookmark($post->id))
        <form action="{{ route('post_user.store', $post) }}" method="post">
            @csrf
            <button>お気に入り登録</button>
        </form>
        @else
        <form action="{{ route('post_user.destroy', $post) }}" method="post">
            @csrf
            @method('delete')
            <button>お気に入り解除</button>
        </form>
        @endif
    </div>

@endforeach
{{ $posts->links() }}
       
    </body>
</html>
@endsection