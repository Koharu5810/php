<?php
// $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
// print "私の名前は、" . $name . "<br />";

// // switch ($choices) {
// //     case htmlspecialchars($_POST["Aセット"], ENT_QUOTES):
// //         "Aセット";
// //         break;
// //     case htmlspecialchars($_POST["setB"], ENT_QUOTES):
// //         "Bセット";
// //         break;
// //     case htmlspecialchars($_POST["setC"], ENT_QUOTES):
// //         "Cセット";
// //         break;

// // }
// // echo "ご希望の商品は、" . $choices . "<br>";

// $item = htmlspecialchars($_POST["item"], ENT_QUOTES);
// print "注文数は、" . $item . "<br />";

// 模範解答
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$choices = htmlspecialchars($_POST["choices"], ENT_QUOTES);
$item = htmlspecialchars($_POST["item"], ENT_QUOTES);

echo "私の名前は、" . $name . "<br />";
echo "ご希望の商品は、" . $choices . "<br />";
echo "注文数は、" . $item . "<br />";