<?php
// Q1の関数はここに書く
function hello(){
    echo "Hello amemiya!!";
}

$language = [
  'HTML',
  'CSS',
  'JavaScript',
  'PHP',
  'Ruby',
  'Python'
];
$fruits = [
  ['みかん', 120],
  ['りんご', 90],
  ['さくらんぼ', 20],
  ['ぶどう', 200]
];
?>
<html lang="ja">
<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <title>テスト</title>
</head>
<body>
  <h1>テスト</h1>
  <h2>Q1 hello関数を作り、hello('自分の名前')で 「Hello 自分の名前!!」と出力してください</h2>
  <!-- ここに回答 -->
  <P><?php hello() ?></P>
  <h2>Q2 foreachを使い、$languageの要素を全て出力してください</h2>
   <!-- ここに回答 -->
  <?php foreach($language as $value):?>
    <p>
      <?php echo $value; ?>
    </p>
  <?php endforeach ?>
 
  <h2>Q3 $fruitsの中の「りんご」を出力してください</h2>
  <!-- ここに回答 -->
  <p>
    <?php echo $fruits[1][0]?>
  </p>

  <h2>Q4 foreachを使い、$fruitsの中の果物の名前をすべて出力してください</h2>
  <!-- ここに回答 -->
  <?php foreach($fruits as $value):?>
    <p>
      <?php echo $value[0];?>
    </p>
  <?php endforeach ?>
  
  <h2>Q5 foreachを使い、$fruitsの中の果物の名前と値段をすべて出力してください</h2>
  <!-- ここに回答 -->
  <?php foreach($fruits as $value):?>
  <p>名前:<?php echo $value[0];?> / 値段:<?php echo $value[1];?>円</p>
  <?php endforeach ?>

</body>
</html>