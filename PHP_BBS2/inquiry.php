<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css?v=2">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<script>
    /**
     * 確認ダイアログの返り値によりフォーム送信
    */
    function submitChk () {
        /* 確認ダイアログ表示 */
        var flag = confirm ( "送信してもよろしいですか？\n\n送信したくない場合は[キャンセル]ボタンを押して下さい");
        /* send_flg が TRUEなら送信、FALSEなら送信しない */
        return flag;
    }
</script>
<header><a class="top" href="index.php">トップ画面へ戻る</a></header>
    <h1>問い合わせフォーム</h1>

<p>削除や内容変更要望はこちらまでお願いします！又、掲示板の改善点もありましたら随時募集しています！</p>

<form method="post" action="insert2.php"onsubmit="return submitChk()">
  <div class="toiawasebox">
   <fieldset>
    <legend>入力してください！</legend>
    件名<br>
    <label><input type="text"  name="kenmei"　></label>
    <br>内容<br>
     <label><textArea name="shosai" rows="10" cols="80"></textArea></label>
     <p><input type="submit" value="送信"></p>
    </fieldset>
  </div>


</form>





</body>
</html>