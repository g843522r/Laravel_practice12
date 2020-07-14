<?php

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

Route::get('/', function () {
  return view('welcome');
});

// テキストに沿ってここからRoutingを定義200705

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'Admin\NewsController@add');
});

/* 〜PHP/Laravel09 課題3〜
「http://XXXXXX.jp/XXX というアクセスが来たときに、
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
*/
Route::get('/XXX', 'AAAController@bbb');

/* 〜PHP/Laravel09 課題4〜
【応用】 前章でAdmin/ProfileControllerを作成し、
add Action, edit Actionを追加しました。
web.phpを編集して、admin/profile/create にアクセスしたら
ProfileController の add Action に、admin/profile/edit にアクセスしたら
ProfileController の edit Action に割り当てるように設定してください。
*/
Route::get('/admin/profile/create', 'Admin\ProfileController@add');
Route::get('/admin/profile/edit', 'Admin\ProfileController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//ログイン画面にリダイレクトする設定を追加200711(PHP/Laravel 12)
//さらに「profile/create」と「profile/edit」の設定も追加200714(PHP/Laravel 12 課題2,3)

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
  Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
  Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
});