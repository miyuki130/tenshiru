<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    {{-- config/app.phpでlocaleをja（日本語）に設定したから、日本語を使うことを宣言していることになる --}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        {{--Laravel標準で用意されているJavascriptを読み込む--}}
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP&display=swap" rel="stylesheet">
        {{-- Googleフォントを読み込む --}}
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{--Laravel標準で用意されているCSS読みこむ--}}
        
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        {{--この章の後半で作成するCSSを読みこむ--}}
        
    </head>
    <body>
        <div class="title">
        <div class="row align-items-baseline">
        <h1>てんしる</h1>
            <div class="subtitle col-md-8"><span class="d-none d-lg-inline">〜</span>食品<span class="orange">添</span>加物について<span class="orange">知る</span>ことで<br class="d-lg-none">健康になろう<span class="d-none d-lg-inline">〜</span></div>
        </div>
        </div>
        
        <div class="text-right">
            <a class="btn btn-secondary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    ログアウト
            </a>
        </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
            @yield('content')
            
            <footer class="footer">
                copyright 2020 miyuki.
            </footer>
            
    </body>
</html>