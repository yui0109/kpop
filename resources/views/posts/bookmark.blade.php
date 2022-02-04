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
     
       <h1>ブックマーク一覧</h1>
       <div class='bookmark'>
            @foreach ($posts as $post)
                <div class='post'>
                   
                    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                
                </div>
            @endforeach
       
       </div>
       
       <div class='paginate'>
            
       </div>
      
       
       
    </body>
</html>
@endsection