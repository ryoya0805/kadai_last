<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css?v=2">
</head>
<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="mainwmenu">
      <a class="top" href="index.php">トップ画面に戻る</a>
      </div>
    </div>
  </nav>
</header>


<!-- Main[Start] -->
<form method="post" action="loginshori.php">
  <div class="jumbotron">
   <!-- <fieldset> -->
    <legend>管理者用IDPW入力</legend>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PW：<input type="password" name="lpw"></label><br>
     <input type="submit" value="ログイン">
    <!-- </fieldset> -->
  </div>
</form>
<!-- Main[End] -->

</body>
</html>