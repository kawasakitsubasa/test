関数
function 関数名(){
処理内容
return 返り値
}

引数と戻り値あり
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2)


/*関数で返す値がない時は戻り値を指定する必要はない戻り値のないreturnは省略可能*/
  <?php
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total;

function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo $total . "点なので合格です";
    }else {
        echo $total . "点なので合格です";
    }
}
echo (exam(80, 60, 90));

function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoiArea($upperBase, $lowerBase, $height)
{
    return $upperBase + $lowerBase * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoiArea(4, 5, 4) . "\n";
