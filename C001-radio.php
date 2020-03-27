<form name="radioB" method="post">
<?php

$syuto = [
  'オタワ',
  'トロント',
  'モントリオール',
  'ジュネーブ',
  'チューリッヒ',
  'ベルン',
  'ハンブルク',
  'ブレーメン',
  'ベルリン',
  'バルセロナ',
  'マドリード',
  'リスボン',
  'シドニー',
  'メルボルン',
  'キャンベラ',
];

$country = [
  'カナダ',
  'スイス',
  'ドイツ',
  'スペイン',
  'オーストラリア',
];

$c=0;
foreach($syuto as $key => $value){
    if($key % 3 == 0)
    echo $country[$c++],'の首都は？<br>';
    echo "<label><input type='radio' name='Q$c' value='$key'>$value</label><br>";
    if($key % 3 == 2)
    echo "<br>";
  }
    
?>

<br> 
<input type="submit" name="submit" value="php採点"/>
</form>


<?php 
if(isset($_POST['submit'])){
  $seikai = 0;
  $trueAns = [0,5,8,10,14];

  for ($i=0 ; $i<5 ; $i++){
    $q = $i+1; //Q1から始まるので1足す
      if(isset($_POST["Q$q"]) && //←先に判定されるのでfalseの場合はあとの判定が行われないでエラーがでなくなる
      $_POST["Q$q"] == $trueAns[$i])
      $seikai++;
  }
  echo "あなたは",$seikai*20,"点でした！";
}
?>
