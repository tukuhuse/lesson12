<?php

//課題1
$name = "yuto";

if ($name == "yuto") {
  echo "あなたはyutoです" . "\n";
} else {
  echo "あなたはyutoではありません。" . "\n";
}

//課題2
$sum=0;
for ($i=1;$i<=10000;$i++) {
  $sum+=$i;
}

echo $sum . "\n";

//課題3
$fruits=["りんご","ばなな","もも","みかん","ぶどう"];

foreach( $fruits as $fruit ) {
  echo $fruit . "\n";
}