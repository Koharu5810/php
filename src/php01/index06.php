<!-- PHP 0-7 -->

<?php
// 引数と戻り値がある場合
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}
outputNumber(2);

echo "<br />" . "<br />";

// 引数と戻り値なし
function outputHello()
{
    echo "Hello world";
}
outputHello(); //①
// ①で関数の呼び出しをしていて、呼び出された関数outputHelloがHello worldと出力させる

echo "<br />" . "<br />";

// 引数と戻り値あり
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo $total;

echo "<br />" . "<br />";

function text2($number3, $number4)
{
    $value2 = $number3 + $number4;
    return $value2;
}
$total2 = text2(2, 3);
echo $total2;


echo "<br />" . "<br />";

// 合格点の判定問題
function score($score1, $score2, $score3)
{
    $judge = $score1 + $score2 + $score3;
    if ($judge > 210) {
        echo "合計点は" . $judge. "なので合格です";
    }
        else{
        echo "合計点は" . $judge. "なので不合格です";
    }
}
score(23, 76 ,99);
echo"<br />";
// 模範解答
echo (score(80, 60, 90));

echo "<br />" . "<br />";


// 図形の面積問題
// function triangle($height, $base)
// {
//     return 0.5 * $height * $base;
// }
// function cube($width, $height)
// {
//     return $width * $height;
// }
// function trapezoid($base1, $base2, $height)
// {
//     return 0.5 * ($base1 + $base2) * $height;
// }

// ↓この定義は代入すればいいので不要
// $triangleHeight = 10;
// $triangleBase = 5;
// $cubeWidth = 20;
// $cubeHeight =7;
// $trapezoidBase1 = 10;
// $trapezoidBase2 = 8;
// $trapezoidHeight = 4;

// ↓代入すればいいので長く記述する必要なし
// $triangleArea = triangle($triangleHeight, $triangleBase);
// echo "三角形の面積は" . $triangleArea . "です" . "<br />";
// $cubeArea = cube($cubeWidth, $cubeHeight);
// echo "四角形の面積は" . $cubeArea . "です" . "<br />";
// $trapezoidArea = trapezoid($trapezoidBase1, $trapezoidBase2, $trapezoidHeight);
// echo "台形の面積は" . $trapezoidArea . "です" . "<br />";

// 模範解答
function getSquareArea($base, $height)
{
    return $base * $height / 2;
}
function getTriangleArea($base, $height)
{
    return $base * $height;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
