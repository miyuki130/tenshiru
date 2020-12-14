@extends('layouts.front')

@section('title','てんしる')
    <div class="subtitle">〜食品<span class="orange">添</span>加物について<span class="orange">知る</span>ことで健康になろう〜</div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">てんしるＴＯＰ</li>
        </ol>
    </nav>    

@section('content')
    <div class="container">
        <div class="row">
            <div class= "col-md-7 offset-md-5">
                <form action="{{ action('PostController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="align-self-center my-0 text-right col-md-2">添加物名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="input" value="{{ $input }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>    
                </form>
            </div>
        </div>
        <div class="row">
            <div class="posts col-md-10 mx-auto mt-2">
                @foreach($posts as $post) 
                    <div class="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="additive">
                                    <a href="{{ action('PostController@show', ['id' => $post->id]) }}">{{ $post->additive }}</a>
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

                <hr style="color:#cd853f;">
                
                @endforeach
            </div>
        </div> 
    </div>
    
    {{ $posts->links() }}
    
@endsection
