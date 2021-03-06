@extends('layouts.front')

@section('title','てんしる')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ action('PostController@index') }}">てんしるＴＯＰ</a></li>
            <li class="breadcrumb-item active" aria-current="page">このサイトについて</li>
        </ol>
    </nav>
    
    <div class="container">
        <h2>このサイトについて</h2>
        食品添加物の表示は、物質名で表示するもの、用途名と物質名を併記して表示するもの、用途名を表示するものがあります。<br>
        こちらでは、その表示名を「添加物名」として紹介します。<br>
        <p>よく使用されている「添加物名」を一覧としていますので、簡単に調べることが出来ます。</p>
        
        危険度については、<br>
        危険度★☆☆：安全性の高いもの<br>
        危険度★★☆：はっきりとした毒性は認められないが、安全性が高いとはいえないもの<br>
        危険度★★★：避けた方が良いもの<br>
        となっています。
        
        
        <h3>《 そもそも、、食品添加物とは 》</h3>
        
        <p>食品衛生法で、「食品の製造の過程において又は食品の加工若しくは保存の目的で、食品に添加、混和、浸潤その他の方法によって使用する物」と定義されています。</p>
        
        食品添加物の安全性は人間で調べられたものではありません。動物実験の結果に基づいて、害はないだろうと推測しているだけです。<br>
        <p>また、動物実験で調べられるのは急性毒性、発がん性、催奇形成などの症状がはっきり分かるものだけですし、動物実験で毒性が認められたにも関わらず、添加物として使用が認められているものがあります。</p>
        
        <h3>《 制作した経緯 》</h3>
        
        現在がんを発病する日本人は２人に１人で、最も多いのが大腸がん、２番目が胃がんです。<br>
        <p>胃も大腸も食べ物が通過する臓器であり、発がんには加工食品に使われている添加物が関係していると考えられています。</p>
        
        私自身、以前から食品添加物について興味を持っており、友人とその危険性について話をすることがありました。<br>
        <p>その時に感じたのは、知識が少ないが、本当は健康のために良い商品を選択したいと思っているということでした。</p>
        
        そこで、食品添加物について簡単に調べられるサービスを通して、良い商品を選択できていない人が多い社会を変えたいという思いで制作しました。<br>
        <p>「てんしる」を通して食品添加物について知り、健康になる役に立てたら幸いです。</p>  
        
    </div>
    
@endsection
