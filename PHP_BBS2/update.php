<?php
//1.POSTでid,name,rank,naiyouを取得
$id = $_POST["id"];
$name = $_POST["name"];
$os = $_POST["os"];
$rank = $_POST["rank"];
$naiyou = $_POST["naiyou"];


//2.DB接続
try {
  $pdo = new PDO('mysql:dbname=apex;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
$sql = 'UPDATE apex_table SET name=:name,rank=:rank,os=:os,naiyou=:naiyou WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',    $name,  PDO::PARAM_STR);
$stmt->bindValue(':rank',    $rank,  PDO::PARAM_STR);
$stmt->bindValue(':os',      $os,  PDO::PARAM_STR);
$stmt->bindValue(':naiyou',  $naiyou,  PDO::PARAM_STR);
$stmt->bindValue(':id',      $id,  PDO::PARAM_INT);    //更新したいidを渡す
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //select.phpへリダイレクト
  header("Location: select.php");
  exit;

}



?>
