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
     
       <h1>診断結果</h1>
       <div class='posts'>
            @foreach ($idols as $idol)
                <div class='post'>
                   
                    <h3 class='body'>{{ $idol->name }}</h3>
                </div>
            @endforeach
       </div>
       
       <div class='paginate'>
            
       </div>
    <div class="back">[<a href="/">戻る</a>]</div>
      
       
       
    </body>
</html>
@endsection