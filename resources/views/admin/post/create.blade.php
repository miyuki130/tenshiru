@extends('layouts.admin')

@section('title','てんしる')
    <div class="subtitle">〜食品<span class="orange">添</span>加物について<span class="orange">知る</span>ことで健康になろう〜</div>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ action('Admin\PostController@index') }}">管理画面ＴＯＰ</a></li>
            <li class="breadcrumb-item active" aria-current="page">投稿画面</li>
        </ol>
    </nav> 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>管理者用　投稿画面</h2>
                <form action="{{ action('Admin\PostController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">添加物名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="additive">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">目的・効果</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="purpose" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">どう危険か</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="dangerous" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <p>危険度</p>
                    
                        <p><input type="radio" name="lisk" value="危険度★">危険度★</label></p>
                        <p><input type="radio" name="lisk" value="危険度★★">危険度★★</label></p>
                        <p><input type="radio" name="lisk" value="危険度★★★">危険度★★★</label></p>
                    
                    <div class="form-group row">
                        <label class="col-md-2">イラスト</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿">
                    
                </form>    
            </div>
        </div>    
    </div>
@endsection