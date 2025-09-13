For文
for ($i = 初期値; $i <= 回数; 増減式) {
処理
}

while (条件) {
// 真の時に実行
// 繰り返しの処理の中で変数の値を変化させる
}

breakの使い方
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}

continueの使い方
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}

do while文
do{
// whileの条件式が真の時に実行
}while (条件式);


<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}

for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br />';
}

$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

$count = 0;

while ($count < 20) {
    echo $count . '<br />';
    $count += 1;
}

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
}
if ($count % 3 === 0) {
    $count++;
    continue;
}
    echo $count . '<br />';
    $count++;
}

$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);

$num = 0;
do{
    echo 'num = ' . $num .'<br />';
    $num++;
}while ($num <3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz  = "FizzBuzz";

for ($i = 1; $i <= 50; $i ++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz;
    } else if ($i % 3 == 0) {
    echo $Fizz;
    } else if ($i % 5 == 0) {
    echo $Buzz;
} else {
    echo $i;
}
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $i++) {
        echo "●";
    }
    echo "<br />";
}