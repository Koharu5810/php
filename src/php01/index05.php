<!-- PHP 0-6 -->

<?php
for ($i = 0; $i < 4; $i++) {
    //  初期値　　回数　増減式
    echo $i;
}
echo "<br />" . "<br />";



for ($i = 2; $i < 11; $i += 2) { 
    echo $i;
    echo "<br />";
}
    echo '<br />';
// 模範解答
for ($i = 1; $i <= 5 ; $i++) {
    echo $i * 2 . '<br />';
}
    echo '<br />';



$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}
    echo '<br />';



$count = 0;

// while ($count < 20) {
//     echo ++$count . '<br />';
//     $count + 1;
while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}
    echo '<br />';
    echo '<br />';


// <!-- breakの使い方 -->
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break; // $iが5のときループから抜ける
    }
    echo $i;
    $i++;
}
    echo '<br />';
    echo '<br />';


// <!-- continueの使い方 -->
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue; // $iが5の時、$iに1を足す処理をし、スキップをする
    }
    echo $i;
    $i++;
}
    echo '<br />';
    echo '<br />';


$count = 0;
while ($count <= 100) { // 100より少ないか等しい＝100以下の場合繰り返す
    if ($count >= 20) { // 20より多いか等しくなったらストップ
        break;
    }
    if ($count % 3 == 0) { // 3で割り切れて0になる＝3の倍数
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}
    echo '<br />';
    echo '<br />';



$i = 0;
do {
    echo $i . '<br />';
    $i++;
} while ($i < 5);
    echo '<br />';
    echo '<br />';



$num = 0;
do {
    echo 'num = ' . $num . '<br />';
    // $num++;
    // ↓模範解答
    $num += 1;
} while ($num < 3);
    echo '<br />';
    echo '<br />';


// FizzBuzz問題
for ($count = 1; $count <= 50; $count++) {
    if ($count % 3 == 0 && $count % 5 == 0) {
        echo 'FizzBuzz' . '<br />';
    }
    elseif ($count % 3 === 0) {
        echo 'Fizz' . '<br />';
    }
    elseif ($count % 5 === 0) {
        echo 'Buzz' . '<br />';
    }
    else {
        echo $count . '<br />';
    }
}
    echo '<br />' . '<br />';

// 模範解答
$Fizz = 'Fizz';
$Buzz = 'Buzz';
$FizzBuzz = 'FizzBuzz';

for ($i = 1; $i <= 50; $i++) {
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

    echo '<br />' . '<br />';

// 二重ループ
// $i = '⚫︎';
// do {
//     echo '⚫︎⚫︎⚫︎⚫︎⚫︎' . '<br />';
// } while ($i = 1);
// 模範解答

for ($i = 1; $i < 6; $i++) {
    // 外側の$iのプログラムが1回繰り返されるごとに、内側のプログラム$Jが５回繰り返される
    // 内側のプログラム$j単体では「＊＊＊＊＊＊」が表示される
    for ($j = 1; $j < 6; $j++) {
        echo '⚫︎';
    }
    echo '<br />';
}
?>

