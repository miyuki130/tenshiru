<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    {{-- config/app.phpでlocaleをja（日本語）に設定したから、日本語を使うことを宣言していることになる --}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <meta name="description" content="〜食品添加物について知ることで健康になろう〜">
        
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        {{--Laravel標準で用意されているJavascriptを読み込む--}}
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP&display=swap" rel="stylesheet">

        {{-- Googleフォントを読み込む --}}
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{--Laravel標準で用意されているCSS読みこむ--}}
        
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
        {{--この章の後半で作成するCSSを読みこむ--}}
        
    </head>
    <body>
        <div class="title">
        <h1>てんしる</h1>
            <div class="subtitle">　〜食品<span class="orange">添</span>加物について<span class="orange">知る</span>ことで健康になろう〜</div>
        </div>    
            
            @yield('content')
            
            <footer class="footer">
                copyright 2020 miyuki.
                
                <div class="information">
                <a href="{{ action('PostController@about')}}">このサイトについて</a> 
                <div class="shikiri">  |  </div>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSd1Jt3SrHYvG8PARWW1gBfFu1uEAdCdYuKQxeQ0KYK1hKQFwA/viewform?usp=sf_link">お問い合わせ</a>
                </div>
                    
            </footer>
            
    </body>
</html>