<?php //宣言を追記

/* for文の初めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 101; //終わりを101に変更

for( $i = $start; $i < $end; $i++ ) {
  
  //5で割り切れたら{}を実行する
  if( $i % 5 == 0 ) {
    echo $i . "\n"; //文の終わりに . "\n";を追記
  }
}