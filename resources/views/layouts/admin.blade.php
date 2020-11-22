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
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet" type="text/css">
        {{-- Googleフォントを読み込む --}}
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{--Laravel標準で用意されているCSS読みこむ--}}
        
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        {{--この章の後半で作成するCSSを読みこむ--}}
        
    </head>
    <body>
        <h1>@yield('title')</h1>
            @yield('content')
            @yield('footer')
    </body>
</html>