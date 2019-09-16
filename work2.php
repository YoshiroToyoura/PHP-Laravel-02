<?php $weekday = "月曜";
switch ( $weekday ) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
    }
    
$weekday = "木曜";
switch($weekday) {
    case "月曜":
    case "木曜":
        echo "可燃ごみの日です。";
    case "水曜":
        echo "資源ごみの日です。";
    default:
        echo "回収はありません。";
}

$a = 3;
$b = 3;
$c ="3";

var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);

for ($i = 0 ; $i < 10 ; $i ++) {
  echo $i ;
}

$total = 0 ;
 echo $total ;
 
for ( $i=0 ; $i <= 100 ; $i ++) {
  $total +=$i;
}
echo $total;

$animals = array("dog","cat","panda");
  foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
  }
  
  //この一行はコメントになる
  
  /*
    この部分は全て
    コメントになるため
    プログラムとして
    動作しない
  /*
  