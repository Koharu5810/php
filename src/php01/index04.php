<!-- PHP 0-5 -->
<?php
$a = 5;

if( $a = 5 ){
echo "\$aは5です";
}else{
;
}
// ↓模範解答
// if ($a === 5) {
// echo "\$aは5です";
// }
echo "<br />";
echo "<br />";
?>

<?php
$a = 7;

if ($a === 5) {
echo "\$aは5です";
} else {
echo "\$aは5以外です"; // 完答！
}
echo "<br />";
echo "<br />";
?>

<?php
$a = 7;

// if ($a === 5) {
// echo "\$aは5です";
// } elseif ($a === 6) {
// echo "\$aは6です";
// } else {
// echo "\$aは7です";
// }
if ($a === 5) {
echo "\$aは5です";
} elseif ($a === 7) {
echo "\$aは7です";
} else {
echo "\$aは5と7以外です";
}
echo "<br />";
echo "<br />";
?>

<?php
$people = "Saburo";

// switch ($people) {
//     case 'value':
//     echo "三郎です";
//         break;
//     echo "四郎です";
//     default:
//         # code...
//         break;
// }
switch ($people) {
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro":
    echo "次郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
}

echo "<br />";
echo "<br />";
?>

<?php
$a = 7;

// echo $result = ($a === 7) ? "TRUE" : "FALSE";
// ↑この場合echo resultを記述すればよかった
// ↓模範解答
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;

echo "<br />";
echo "<br />";
?>
