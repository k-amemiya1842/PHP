<?php
$areas = array(
    '北海道',
    '青森県',
    '岩手県',
    '宮城県',
    '秋田県',
    '山形県',
    '福島県',
    '茨城県',
    '栃木県',
    '群馬県',
    '埼玉県',
    '千葉県',
    '東京都',
    '神奈川県',
    '新潟県',
    '富山県',
    '石川県',
    '福井県',
    '山梨県',
    '長野県',
    '岐阜県',
    '静岡県',
    '愛知県',
    '三重県',
    '滋賀県',
    '京都府',
    '大阪府',
    '兵庫県',
    '奈良県',
    '和歌山県',
    '鳥取県',
    '島根県',
    '岡山県',
    '広島県',
    '山口県',
    '徳島県',
    '香川県',
    '愛媛県',
    '高知県',
    '福岡県',
    '佐賀県',
    '長崎県',
    '熊本県',
    '大分県',
    '宮崎県',
    '鹿児島県',
    '沖縄県'
);

$fruits = array(
    'apple' => 'りんご',
    'banana' => 'バナナ',
    'orange' => 'オレンジ',
    'grape' => 'ぶどう',
    'peach' => 'もも',
    'pineapple' => 'パイナップル'
);

$menber = array(
    'A' => array('height' => 150, 'weight' => 45),
    'B' => array('height' => 160, 'weight' => 55),
    'C' => array('height' => 180, 'weight' => 80),
    'D' => array('height' => 170, 'weight' => 70),
    'E' => array('height' => 175, 'weight' => 65)
);

$posts = [
    ['A33D5BDF','0番目の配列です'],
    ['A3F994AB','1番目の配列です'],
    ['F7914A3F','2番目の配列です'],
    ['A20A19AD','3番目の配列です'],
    ['0BBF9BA5','4番目の配列です']
];


Array
(
    [0] =>Array
        (
            [0] => 5fa93603284a3
            [1] => あ
            [2] => あ
        )

    [1] => Array
        (
            [0] =>; 5fa93af604515
            [1] => a
            [2] => a
        )

    [2] => Array
        (
            [0] => 5fa96b5d0b376
            [1] => test
            [2] => aaaaaa
        )

)

$post_info = []; //4-3


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>practice</title>
    </head>
    <body>
        <!-- 問題1  foreachを使ってセレクトボックスで画像のように表示させよ。 -->
        <section>
        <h3>問題1  foreachを使ってセレクトボックスで画像のように表示させよ。</h3>
            <label>都道府県を選択してください：</label>
            <select size="1">
                <?php foreach($areas as $value) : ?>
                    <option value=""><?php echo $value;?></option>
                <?php endforeach ?>
            </select>
        </section>

        <hr>

        <!-- 問題2　foreachを使って画像のように表示させよ。 -->
        <section>
        <h3>問題2　foreachを使って画像のように表示させよ</h3>
            <?php foreach($fruits as $key => $value) : ?>
                <p><?php echo $value;?></p>
            <?php endforeach ?>
        </section>

        <hr>

        <!-- 問題3　foreachを使って画像のように表示させよ。 -->
        <section>
            <h3>問題3　foreachを使って画像のように表示させよ</h3>
            <?php foreach($menber as $name => $physique) :?>
                <p><?php echo $name."さん ".$physique["height"]."cm ".$physique["weight"]."kg";?></p>
            <?php endforeach ?>
        </section>

        <hr>

        <!-- 問題4-1　foreachを使わずに"2番目の配列です"を画像のように表示させよ。 -->
        <section>
            <h3>問題4-1　foreachを使わずに"2番目の配列です"を画像のように表示させよ。</h3>
            <p><?php echo $posts[2][1]; ?></p>
        </section>

        <hr>
        
        <!-- 問題4-2 foreachを使ってidの部分を全てを画像のように表示させよ。 -->
        <section>
            <h3>問題4-2 foreachを使ってidの部分を全てを画像のように表示させよ。</h3>
            <?php foreach($posts as $post => $value) :?>
                <p><?php echo $value[0]; ?></p>
            <?php endforeach ?>
            
        </section>

        <hr>
        
        <!-- 問題4-3 foreachを使って、もしidが "A20A19AD" という文字列だったら、その配列を変数$post_infoに代入せよ。 -->
        <section>
            <h3>問題4-3 foreachを使って、もしidが "A20A19AD" という文字列だったら、その配列を変数$post_infoに代入せよ。</h3>
            <p>※print_rで$post_infoの中身を出力</p>
            <?php foreach($posts as $post => $value){ 
                if($value[0] === "A20A19AD"){ 
                    $post_info = $posts[$post]; ?>
                    <p><?php print_r($post_info); ?></p>
                <?php } } ?>
            
        </section>

    </body>
</html>