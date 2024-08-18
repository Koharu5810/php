<?php
$people = array("Taro", "Jiro", "Saburo");

var_dump($people);

// 出力結果↓ ()の中身は文字数を表している
// array(3) {
//     [0]=> string(4) "Taro"
//     [1]=> string(4) "Jiro"
//     [2]=> string(6) "Saburo"
// }

echo "<br />" . "<br />";

echo $people[0];

echo "<br />" . "<br />";

$people2 = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo"
);

var_dump($people);
// array(3) {
//     [0]=> string(4) "Taro"
//     [1]=> string(4) "Jiro"
//     [2]=> string(6) "Saburo"
// }

echo "<br />" . "<br />";

// 以下のような作成方法もある
$people3 = [
    "parson4" => "Shiro",
    "person5" => "Goro"
];
echo $people3["parson4"];

echo "<br />" . "<br />";

// 多次元配列
$people4 = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];
// 多次元配列を出力する時は配列の変数にキーを[]で指定
echo $people4[0]["last_name"];

echo "<br />" . "<br />";

// foreach文
$people5 = array("Taro", "Jiro", "Saburo");

foreach ($people5 as $person) {
    echo $person;
    echo "<br />";
}

echo "<br />" . "<br />";

$People = array(
    "Person1" => "Taro",
    "Person2" => "Jiro",
    "Person3" => "Saburo"
);

foreach ($People as $Person => $name) {
    print $Person . "は" . $name . "です" . "<br />";
}
// 出力結果↓
// Person1はTaroです
// Person2はJiroです
// Person3はSaburoです

echo "<br />" . "<br />";

// 問題
// $list = [
//     [
//         "Name" => "Taro",
//         "Age" => "25歳",
//         "Gender" => "men"
//     ],
//     [
//         "Name" => "Jiro",
//         "Age" => "20歳",
//         "Gender" => "men"
//     ],
//     [
//         "Name" => "Hanako",
//         "Age" => "16歳",
//         "Gender" => "women"
//     ]
// ];

// foreach ($list as $human) {
//     echo $list[0]["Name"] . "(" . $list[0]["Age"] . $list[0]["Gender"] . ")";
//     echo "<br />";
// }
// foreach ($list[1] as $human) {
//     echo $human . "(" . $data .")";
//     echo "<br />";
// }
// foreach ($list["Name"] as $LastName) {
//     echo $LastName . "("  .")";
//     echo "<br />";
// }

// 模範解答
$list = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["hanako", 16, "women"]
];

foreach ($list as $Person) {
    echo $Person[0] . "(" . $Person[1] . "歳" . $Person[2] . ")" . "<br />";
}
