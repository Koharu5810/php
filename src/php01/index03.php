<!-- PHP 0-4　算術演算子 -->
<?php
$a = 15;
$b = 3;
$c = 10;

// echo $a + $b;
// echo "<br />";
// echo $a - $b;
// echo "<br />";
// echo $a * $b;
// echo "<br />";
// echo $a / $b;
// echo "<br />";
// echo $a - $c;  出力前に計算結果の式を変数名つけて記述しておく
$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";
echo "<br />";
?>

<!-- PHP 0-4　代入・複合演算子 -->
<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

// $answer11 = $a /= $d;
// $answer12 = $c += $d;

// echo $answer11;
// echo "<br />";
// echo $answer12;

$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";
echo "<br />";
?>

<!-- PHP 0-3 比較演算子 -->
<?php
$a = 20;
$b =5;

// echo $a >= $b;

echo ($a > $b); // TRUEでないとWeb上で表示されなかった
echo "<br />";
echo "<br />";
?>

<?php
$a = 20;
$b = 5;

// $result = ($a >10) && ($a < 30);

// echo $result;
// 模範解答では直にechoで演算子定義していた
echo ($a > 10 && $a <30);
echo "<br />";
echo "<br />";
?>

<?php
// $a = 10;
// $b = 10;
// $c = 5;
// $d = 5;

// echo ++$a;
// echo "<br />";
// echo $a++;
// echo "<br />";
// echo --$c;
// echo "<br />";
// echo "<br />";
// echo "<br />";

$a = $b = 10;
$c = $d = 5;

echo ++$a;
echo "<br />";
echo $b++;
// $b++ は、値を返した後でインクリメントが行われるため、出力時点ではまだ元の値 (10) が表示されます。その後で $b が 11 に増加します。
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";
echo "<br />";
echo $d //ここで−1の処理がされる
?>
