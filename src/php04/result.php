<?php

require_once("config/status_codes.php");

$answer_code = htmlspecialchars($_POST["answer_code"], ENT_QUOTES);
$option = htmlspecialchars($_POST["option"], ENT_QUOTES);

if (!$option) {
    // header関数とは、別ページに移動させたりリダイレクトを行う
    // option変数が存在しなかった時＝index.phpファイルで解答の選択肢を選ばなかったときにindex.phpにリダイレクトするようにしている＝何も選択せず解答ボタンを押すとリダイレクト
    header("Location: index.php");
}

// 送信された解答のデータから配列を探し出す
// foreach文で多次元配列$status_codeを一つ一つの配列に分解する
foreach ($status_codes as $status_code) {
    // if文で解答コードと配列が合致したときのみ必要となるデータの取得を行う
    if ($status_code["code"] === $answer_code) {
        $code = $status_code["code"];
        $description = $status_code["description"];
    }
}
$result = $option === $code;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="result__content">
            <div class="result">
                <!-- 条件分岐で正誤判定を行う -->
                <!-- $resultと一致すれば正解、else（そうでない）場合不正解 -->
                <?php if ($result): ?>
                    <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                    <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <!-- 実際の正解のステータスコードを記述 -->
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <!-- 実際の正解の説明文を記述 -->
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>