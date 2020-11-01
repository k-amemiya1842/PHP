<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel News - index</title>
    </head>
    <body>
        <nav>
            <div>
                <a href="#">Laravel News</a>
            </div>
        </nav>
        <section>
            <h2>さぁ、最新のニュースをシェアしましょう</h2>

            <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
                <div>
                <label for="">タイトル：</label>
                <input type="text" name="article_title">
                </div>
                <div>
                <label for="">記事：</label>
                <textarea name="contents"></textarea>
                </div>
                <div>
                <input type="submit" name="btn1" value="投稿">
                </div>
            </form>
        </section>

        <section>
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                writeData();
            }

            readData();

            function readData(){
                $news_file = 'news.txt';

                $fp = fopen($news_file, 'rb');

                if ($fp){
                    if (flock($fp, LOCK_SH)){
                        while (!feof($fp)) {
                            $buffer = fgets($fp);
                            print($buffer);
                        }

                        flock($fp, LOCK_UN);
                    }else{
                        print('ファイルロックに失敗しました');
                    }
                }


                fclose($fp);
            }

            function writeData(){
                $article_title = $_POST['article_title'];
                $contents = $_POST['contents'];
                $contents = nl2br($contents);

                $data = "<hr>\r\n";
                $data = $data."<p>".$article_title."</p>\r\n";
                $data = $data."<p>".$contents."</p>\r\n";

                $news_file = 'news.txt';
                $fp = fopen($news_file, 'ab');

                if ($fp){
                    if (flock($fp, LOCK_EX)){
                        if (fwrite($fp,  $data) === FALSE){
                            print('ファイル書き込みに失敗しました');
                        }
                
                        flock($fp, LOCK_UN);
                    }else{
                        print('ファイルロックに失敗しました');
                    }
                }

                fclose($fp);
            }

            

        ?>
        </section>

    </body>
</html>