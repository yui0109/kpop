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
        
       
       <p class='create'><a href='/posts/create'><button type="button" class="btn btn-primary">作成</button></a></p>
       
       <form action="/idols" method="GET">
            @csrf
           
            <div class="body">
                <textarea name="keyword" placeholder="グループ名を入力してください。"></textarea>
                <p class="keyword_error" style="color:red">{{ $errors->first('keyword') }}</p>
            </div>
            <input class="btn btn-primary" type="submit" value="検索">
        
            <p class='test'><a href='/test'><button type="button" class="btn btn-success">テスト</button></a></p>
        </form>
        
        <p class='bookmark'><a href='/posts/bookmark'><button type="button" class="btn btn-outline-primary">ブックマーク一覧</button></a></p>
       
       <div class='paginate'>
            
       </div>
       <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                   
                   
                </div>
            @endforeach
       </div>
       <div class='paginate'>
            {{ $posts->links() }}
       </div>
       <div class='revisions'>
           @foreach($revisions as $revision)
             <li>{{ $revision->body }}{{ $revision->post_id }}</li>
           @endforeach
       </div>
        
    </body>
</html>
@endsection