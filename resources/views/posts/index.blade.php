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
     
       <h1>K-POPアイドル辞典</h1>
       <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                   
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
       </div>
       <div class='paginate'>
            {{ $posts->links() }}
       </div>
       <p class='create'>[<a href='/posts/create'>作成</a>]</p>
       
       <form action="/idols" method="POST" class="form-inline my-2 my-lg-0 ml-2"> 
          <div class="form-group">
          <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
          </div>
          <input type="submit" value="検索" class="btn btn-info">
        </form>
    </body>
</html>
@endsection