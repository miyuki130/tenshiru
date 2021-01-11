# てんしる　

![title](title.png)

## システムの概要
本サービスは、よく使用される食品添加物を一覧で表示し、簡単に調べることが出来ます。  
ユーザー側画面は、レスポンシブウェブデザインとして、PC、スマートフォン両方に対応しています。  
運営者は、管理用CMSで、添加物情報と添加物画像を更新できます。  
PHPと、Laravelを使って開発しています。

## 制作した経緯
私自身、以前から食品添加物について興味を持っており、友人とその危険性について話をすることがありました。<br>
その時に感じたのは、知識が少ないが、本当は健康のために良い商品を選択したいと思っているということでした。<br>
そこで、食品添加物について簡単に調べられるサービスを通して、良い商品を選択できていない人が多い社会を変えたいという思いで制作しました。<br>

## こだわりポイント
柔らかいイメージの、色合い・書体にしました。

## 機能一覧、使い方
* ユーザー側<br>
![user](user.gif)<br>
   * 添加物一覧画面表示<br>
   * 「もっと詳しく」から詳細画面表示<br>
   * 名前で絞り込み検索機能<br>

* 運営者側<br>
![admin](admin.gif)<br>
   * アカウント認証機能<br>
   * 添加物一覧画面表示<br>
   * 名前で絞り込み検索機能<br>
   * 記事、画像投稿機能<br>
   * 投稿編集機能<br>
   * 投稿削除機能<br>

* 閲覧者側、管理者側　共通<br>
   * ページネーション機能<br>
   * パンくずリスト表示機能<br>
　
## URL
* 閲覧者用画面：https://gentle-peak-00140.herokuapp.com/post<br>
* 管理者用画面：https://gentle-peak-00140.herokuapp.com/admin/post<br>
   * テストログインボタンを押すことでログインできます。<br>
   * （メールアドレス：test@example.com　パスワード：test#1234）

## 使用技術
* PHP 7.3 / Composer<br>
* Laravel 5.8<br>
* HTML5 / CSS3<br>
* Bootstrap 4<br>
* MySQL5.7<br>
* [開発環境]<br>
   * AWS EC2<br>
   * AWS Cloud９<br>
   * AWS S3（画像保存）<br>
* [公開環境]<br>
   * Heroku<br>
   * AWS S3（画像保存）

## 参考文献
渡辺雄二 「[最新版]食品添加物　ハンドブック」 ビジネス社, 2020.