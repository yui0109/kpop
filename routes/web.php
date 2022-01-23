<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>'auth'], function(){
    Route::get('/', 'PostController@index');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    
    Route::get('/test','IdolController@test');
   
    Route::get('/idols','IdolController@search');
    
    
    Route::delete('/posts/{post}', 'PostController@delete');
    Route::get('/posts/{post}', 'PostController@show');
    Route::post('/posts', 'PostController@store');
    
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/result','IdolController@result');


Route::get('revisions', function(){  //編集履歴テスト

    // ログイン
    auth()->loginUsingId(1);

    // データ追加
    $post = new \App\Post();
    $post->title = 'テスト記事１';
    $post->body = 'テストbody1';
    $post-> idol_id =3;
    $post->save();

    sleep(1);

    // データ変更
    $post->title = 'テスト記事２';
    $post->body = 'テストbody2';
    $post->idol_id = 4;
    $post->save();

    sleep(1);

    // データ削除
    $post->delete();
    sleep(1);
    
    // データ閲覧
    $post = \App\Post::withTrashed()->with('revisions')->first();
    dd($post->toArray());
    

});