@extends('layouts.front')

@section('title','てんしる')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ action('PostController@index') }}">てんしるＴＯＰ</a></li>
            <li class="breadcrumb-item active" aria-current="page">このサイトについて</li>
        </ol>
    </nav>
    
    <div class="container">
        <h2>このサイトについて</h2>
        <p>よく使用されている食品添加物が一覧になっており、簡潔で、簡単に調べることが出来ます。</p>
            
        <p>食品添加物について知り、健康のために良い商品を選択したいと思っているけれど
            知識が少なく、良い商品を選択できていない人々が多い社会を変えたいという想いで作りました。</p>
            
    </div>
@endsection
