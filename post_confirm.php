
<?php
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。
$name = $_POST['name'];
$mail = $_POST['mail'];
$eiga = $_POST['eiga'];

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?=h($name)?>
    EMAIL：<?=h($mail)?>
    映画：<?=h($eiga)?>
    パスワード：
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
