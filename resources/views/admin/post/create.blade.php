@extends('layouts.admin')

@section('title','てんしる')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿画面</h2>
                <form action="{{ action('Admin\PostController@post') }}" method="post" enctype="multipart/form-data">
                    
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
                            <input type="text" class="form-control" name="additive" value="{{ old('additive') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">目的・効果</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="purpose" rows="5">{{ old('purpose') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">どう危険か</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="dangerous" rows="5">{{ old('dangerous') }}</textarea>
                        </div>
                    </div>
                    
                    <p>危険度</p>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lisk" id="one" checked>
                        <label class="form-check-label" for="one">危険度★</label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lisk" id="two" checked>
                        <label class="form-check-label" for="two">危険度★★</label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lisk" id="three" checked>
                        <label class="form-check-label" for="three">危険度★★★</label>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">イラスト</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image" value="{{ old('image') }}">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿">
                    
                </form>    
            </div>
        </div>    
    </div>
@endsection

@section('footer')
copyright 2020 miyuki.
@endsection