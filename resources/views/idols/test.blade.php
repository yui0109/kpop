@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>kpopアイドル診断</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/test.css">

</head>
<body>
    <h1>あなたにおすすめのkpopアイドルは？</h1>
    <hr />
    <div id="main">
        <div id="question_area">
            <div id="q1" class="txt_display">強めサウンドの曲が好き</div> <!-強めor爽やか->
            <div id="q2" class="txt_hide">ダンスよりもラップ重視</div> 　<!-HIPHOPorダンス->
            <div id="q3" class="txt_hide">ポップな曲よりもバラードが好き</div>  <!-バラードorかわいい>
            <div id="q4" class="txt_hide">かわいさよりも色気重視</div>　<!-セクシーor色々>
            <div id="q5" class="txt_hide">かわいさよりもかっこよさ重視</div> <!-かわいいorかっこいい>
            <div id="q6" class="txt_hide">色気のあるグループが好き</div> <!-セクシーorかっこいい>
            <div id="q7" class="txt_hide">かっこいい一面も見たい</div> <!-色々orかわいい>
        </div>
    　　
        <div id="result_area" class="txt_hide">
            <p>あなたにおすすめのアイドルは……</p>
            <div id="a1" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="hiphop"/>
                 <input type="hidden" name="group_type"  value="sexy"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a2" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="hiphop"/>
                 <input type="hidden" name="group_type"  value="variety"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a3" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="dance"/>
                 <input type="hidden" name="group_type"  value="cool"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a4" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="dance"/>
                 <input type="hidden" name="group_type"  value="cool"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a5" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="melodious"/>
                 <input type="hidden" name="group_type"  value="sexy"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a6" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="melodious"/>
                 <input type="hidden" name="group_type"  value="cool"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a7" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="refreshing"/>
                 <input type="hidden" name="group_type"  value="variety"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form>
            </div>
            <div id="a8" class="txt_hide">
                 <form action="/result" method="GET">
                 @csrf
                 <input type="hidden" name="music_type"  value="refreshing"/>
                 <input type="hidden" name="group_type"  value="cute"/>
                 <input type="submit"  value="アイドルを見る"/>
                 </form> 
            </div>
            
           
        
            <a href="javaScript:OnAgainClick();">もう1回</a>
        </div>
        <div id="btn_area" class="txt_display">
            <a href="javascript:OnYesClick();" id="btn_yes">Yes</a>
            <a href="javascript:OnNoClick();" id="btn_no">No</a>
        </div>
    </div>
    
<script src="{{ asset('js/test.js') }}"></script>    
</body>

<html>
@endsection