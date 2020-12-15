@extends('layouts.front')

@section('title','てんしる')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ action('PostController@index') }}">てんしるＴＯＰ</a></li>
            <li class="breadcrumb-item active" aria-current="page">もっと詳しく</li>
        </ol>
    </nav> 
    
    <div class="container">
        <h2>もっと詳しく！</h2>
        <div class="row">
            <div class="posts col-md-10 mx-auto mt-2">
                    <div class="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="additive">
                                    {{ $post->additive }}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="purpose">
                                    使用目的：　{{ $post->purpose }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                @if ($post->image_path)
                                    <img src="{{ \Storage::url("image/".$post->image_path) }}" style="max-height:4rem;">
                                @endif
                            </div>
                            <div class="col-md-7">
                                <div class="dangerous">
                                    危険性　：　{{ $post->dangerous }}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="lisk">
                                    {{ $post->lisk }}
                                </div>
                            </div>
                        </div>
                    </div>    
            </div>
        </div>
        <div>
            <h3>管理人miyukiからの一言</h3>

            <div class="word">
                <div class="illustration">
                <img src="{{ secure_asset('storage/image/博士.png') }}" alt="フクロウ博士" style="max-height:7rem;">
                </div>
                <div class="comment">
                        <p>★文章を入れる★テストテストテストテストテストテスト</p>
                </div>
            </div>
            
            
        </div>
        <div>
            <h3>{{ $post->additive }}を使用していないおすすめの商品</h3>
        </div>
    </div>
@endsection
