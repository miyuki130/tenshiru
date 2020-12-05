@extends('layouts.front')

@section('title','てんしる')

@section('content')
    <div class="container">
        <div class "row">
            <div class= "col-md-8 offset-md-4">
                <form action="{{ action('PostController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">添加物名</label>
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
            <div class="posts col-md-10 mx-auto mt-3">
                @foreach($posts as $post) 
                    <div class="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="additive">
                                    {{ $post->additive }}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="purpose">
                                    {{ $post->purpose }}
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
                                    {{ $post->dangerous }}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="lisk">
                                    {{ $post->lisk }}
                                </div>
                            </div>
                        </div>
                    </div>    
                <hr color="#cd853f">
                @endforeach
            </div>
        </div> 
    </div>
@endsection
