<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    div {
        padding: 10px;
        font-size: 16px;
    }
    </style>
    <title>ログイン</title>
</head>

<?php
session_start();
$referer = $_SERVER['HTTP_REFERER'];
echo $referer."\n";

echo "\n".'※ここに来る前にいたページ。外部サイトから来た場合は、コードエラーが表示されます';


?>

<body>

    <header>
        <nav class="navbar navbar-default">LOGIN</nav>
    </header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>


</body>

<?php
  print_r( $_SERVER );
?>

</html>