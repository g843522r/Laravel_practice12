<!--200714 htmlの記述を削除(PHP/Laravel 12の課題1より)--

<!DOCTYPE html>
<!--200706作成(PHP/Laravel10の課題4より)
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>EditMyProfile</title>
  </head>
  <body>
    <h1>プロフィール編集画面</h1>
  </body>
</html>

-->


<!--ここから「PHP/Laravel 12 課題1」より追記200714-->
{{--layouts/profile.blade.phpを読み込む--}}
@extends('layouts.admin')

{{--profile.blade.phpの@yield('title')に'プロフィールの編集'を埋め込む--}}
@section('title', 'プロフィールの編集')

{{--admin.blade.phpの@yield('content')に以下のタグを埋め込む--}}
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィール編集画面</h2>
      </div>
    </div>
  </div>
@endsection
