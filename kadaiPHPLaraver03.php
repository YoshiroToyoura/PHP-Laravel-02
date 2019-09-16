<?php $name = "Toyoura" ;
if ($name = "Toyoura") {
  echo "私はToyouraです";
}else {
  echo "あなたの名前ではありません";
}



for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;



$fruits = array("りんご","ぶどう","梨","文旦","みかん") ;
 foreach ($fruits as $fruit) {
   echo "$fruit";
   echo "\n";
 }
 
 
$start = 1 ;
$end = 100 ;
for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}