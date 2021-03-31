<?php

//1.  DB接続します xxxにDB名を入れます   
// rootの後の''は入力不要 mampはrootいれる
try {
$pdo = new PDO('mysql:dbname=apex;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM apex_table");
$status = $stmt->execute();

//データ表示
$view="";
if($status==false){
  
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //自動ループ　&nbsp;=半角スペース
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $view .= "<p>";
    $view .= '<a href="u_view.php?id='.$result["id"].'">';
    $view .= "NO.".$result["id"];
    $view .= "&nbsp;";
    $view .= "名前【ID】:".$result["name"];
    $view .= "&nbsp;"."&nbsp;";
    $view .= "環境:".$result["os"];
    $view .= "&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;";
    $view .= "投稿日時:". $result["indate"];
    $view .= "<br>";
    $view .= "RANK:";
    $view .= $result["rank"];
    $view .= "<br>";
    $view .= $result["naiyou"];
    $view .= "<br>";
    $view .= '[更新]';
    $view .= '</a>';

    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= "<br>";
    $view .= '[削除]';
    $view .= '</a>';
    $view .= "</p>";
  }

}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理画面</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css?v=2">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">



<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="mainmen2u">
      <a class="top" href="index.php">トップ画面に戻る</a><a href="toiawasebox.php">問い合わせBOX</a>
      </div>
    </div>
  </nav>
</header>

<h1>管理画面※中身クリックで更新画面へ、削除は投稿の削除</h1>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
