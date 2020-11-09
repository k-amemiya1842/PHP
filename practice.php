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

    </body>
</html>