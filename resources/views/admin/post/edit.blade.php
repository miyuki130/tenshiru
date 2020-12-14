@extends('layouts.admin')

@section('title','てんしる')
    <div class="subtitle">〜食品<span class="orange">添</span>加物について<span class="orange">知る</span>ことで健康になろう〜</div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ action('Admin\PostController@index') }}">管理画面ＴＯＰ</a></li>
            <li class="breadcrumb-item active" aria-current="page">編集画面</li>
        </ol>
    </nav>
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h2>管理者用　編集画面</h2>
            <form action="{{ action('Admin\PostController@update') }}" method="post" enctype="multipart/form-data">
                
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
                            <input type="text" class="form-control" name="additive" value="{{ $form->additive }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">目的・効果</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="purpose" rows="5">{{ $form->purpose }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">どう危険か</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="dangerous" rows="5">{{ $form->dangerous }}</textarea>
                        </div>
                    </div>
                    
                    <p>危険度</p>
                    
                    <p><input type="radio" name="lisk" value="危険度★" @if ($form->lisk == "危険度★")checked @endif>危険度★</label></p>
                    <p><input type="radio" name="lisk" value="危険度★★" @if ($form->lisk == "危険度★★")checked @endif>危険度★★</label></p>
                    <p><input type="radio" name="lisk" value="危険度★★★" @if ($form->lisk == "危険度★★★")checked @endif>危険度★★★</label></p>
                    
                    <div class="form-group row">
                        <label class="col-md-2">イラスト</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{$form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
    @endsection