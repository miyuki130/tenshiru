@extends('layouts.admin')

@section('title', '管理者画面')

@section('content')
    <div class="container">
        <div class="row">
                <h2>投稿一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href ="{{ action('Admin\PostController@add') }}" role="button" class="btn btn-primary">新規投稿</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\PostController@index') }}" method="get">
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
            <table class="table table-dark">
                <thead class="thead-light">
                    <tr>
                        <th width="10%">ID</th>
                        <th width="20%">添加物名</th>
                        <th width="20%">目的・効果</th>
                        <th width="20%">どう危険か</th>
                        <th width="10%">危険度</th>
                        <th width="20%">イラスト</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->additive,}}</td>
                        <td>{{ $post->purpose,}}</td>
                        <td>{{ $post->dangerous,}}</td>
                        <td>{{ $post->lisk }}</td>
                        <td>{{ $post->image_path,}}</td>
                        <td>
                        <div>
                            <a href="{{ action('Admin\PostController@edit', ['id' => $post->id]) }}">編集</a>
                        </div>
                        <div>
                            <a href="{{ action('Admin\PostController@delete', ['id' => $post->id]) }}">削除</a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>
@endsection