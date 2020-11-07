<?php
        $title = ""; //タイトルの変数
        $text = ""; //記事の内容

        $FILE = "article.txt"; //保存するファイル名
        $id = uniqid(); //ユニークなIDを自動作成
        $DATA = []; //一回分の投稿の情報を入れる
        $BOARD = []; //すべての投稿の情報を入れる
        
        //＄FILEというファイルが存在している時
        if(file_exists($FILE)) {
            //ファイルを読み込む
            $BOARD = json_decode(file_get_contents($FILE));
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //リクエストパラメーターが空でなければ
            if (!empty($_POST["body"]) && !empty($_POST["title"])) {
                //投稿ボタンが押された場合

                //$textに送信されたテキストを代入
                $title = $_POST["title"];
                $text = $_POST["body"];

                //保存の処理
                //新規データ
                $DATA = [$id, $title, $text];
                $BOARD[] = $DATA;

                //全体配列をファイルに保存する
                file_put_contents($FILE, json_encode($BOARD));
            }
        }
        ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="post.css">
        <title>Laravel News - index</title>
    </head>
    <body>
        <nav class="main-header">
            <div class="nav-bar">
                <a href="#" class="nav-link">Laravel News</a>
            </div>
        </nav>
        <section class="form-post">
            <h2 class="content-header">さぁ、最新のニュースをシェアしましょう</h2>

            <form id="formPost" method="POST" class="form" action="#">
                <div class="input-title">
                <label for="title">タイトル：</label>
                <input type="text" name="title">
                </div>
                <div class="input-body">
                <label for="body">記事：</label>
                <textarea name="body" cols="50" rows="10" id="body"></textarea>
                </div>
                <div class="input-submit">
                <input type="submit" class="btn-submit" value="投稿">
                </div>
            </form>

        </section>
        <hr>
        <section class="posts">
            <?php foreach ((array)$BOARD as $ARTICLE) : ?>
                <div class="post">
                <h3 class="post-title">
                <?php echo $ARTICLE[1]; ?>
                </h3>
                <p class="post-body">
                <?php echo $ARTICLE[2]; ?>
                </p>
                <a href="/posts/<?php echo $ARTICLE[0]; ?>">記事全文・コメントを見る</a>
                </div>
                <hr>
            <?php endforeach; ?>

        </section>

    </body>
</html>