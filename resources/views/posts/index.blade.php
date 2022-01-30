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
     
       <h2>K-POPアイドル辞典</h2>
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
       
       <form action="/idols" method="GET">
            @csrf
           
            <div class="body">
                <textarea name="keyword" placeholder="グループ名を入力してください。"></textarea>
                <p class="keyword_error" style="color:red">{{ $errors->first('keyword') }}</p>
            </div>
            <input type="submit" value="検索"/>
            <p class='test'>[<a href='/test'>テスト</a>]</p>
        </form>
        
        <p class='bookmark'>[<a href='/posts/bookmark'>ブックマーク</a>]</p>
       
       <div class='paginate'>
            
       </div>
        @foreach($revisions as $revision)
        <li>{{ $revision->body }}{{ $revision->post_id }}</li>
        @endforeach
    </body>
</html>
@endsection