@extends('layouts.admin')

@section('title','てんしる')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">管理画面ＴＯＰ</li>
        </ol>
    </nav>
    
    <div class="container">
        <div class="row">
                <h2>管理者用　投稿一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href ="{{ action('Admin\PostController@add') }}" role="button" class="btn btn-primary">新規投稿</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\PostController@index') }}" method="get">
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
            <table class="table table-dark">
                <thead class="thead-light">
                    <tr>
                        <th width="15%">添加物名</th>
                        <th width="20%">使用目的</th>
                        <th width="20%">危険性</th>
                        <th width="15%">使用例</th>
                        <th width="10%">危険度</th>
                        <th width="10%">イラスト</th>
                        <th width="10%">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->additive,}}</th>
                        <td>{{ $post->purpose,}}</td>
                        <td>{{ $post->dangerous,}}</td>
                        <td>{{ $post->example,}}</td>
                        <td>{{ $post->lisk,}}</td>
                        <td>
                             <img src="{{ $post->image_path }}" style="max-height:4rem;">
                        </td>
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
    
    {{ $posts->links() }}
    
@endsection