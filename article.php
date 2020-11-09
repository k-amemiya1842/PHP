<?php
$id = $_GET["id"]; //パラメータのIDを取得
$title = ""; //タイトル
$text = ""; //記事の内容

$BOARD = []; 

    //＄FILEというファイルが存在している時
    if(file_exists($FILE)) {
        //ファイルを読み込む
        $BOARD = json_decode(file_get_contents($FILE));
    }


?>




<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="post.css">
        <title>Laravel News - article</title>
    </head>
    <body>
        <nav class="main-header">
            <div class="nav-bar">
                <a href="index.php" class="nav-link">Laravel News</a>
            </div>
        </nav>
        <section class="post-detail">

                <h3 class="post-title"></h3>
                <p class="post-body"></p>

        </section>
        <hr>
        <section class="comments">


        </section>

    </body>
</html>