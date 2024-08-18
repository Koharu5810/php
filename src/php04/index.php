<?php
// require_once は、指定されたファイルがまだ読み込まれていない場合にのみ、そのファイルを読み込む。同じファイルを複数回 require_once で読み込もうとしても、最初の一回のみ実行され、以降は無視される。
// 今回はランダムに取得を行うため定義
require_once("config/status_codes.php");

// ランダムに順番を入れ替える関数
// random_numbers変数に配列をランダムに4つ格納する
$random_indexes = array_rand($status_codes, 4);

// ランダムに取得された配列のキーの0〜3番めの要素をforeach文を用いて、4回新しい配列に代入する
foreach ($random_indexes as $index) {
    $options[] = $status_codes[$index];
}
// options の中から1つを正解として新しい配列 question に代入する
// mt_rand関数を使用すると乱数を生成できる
$question = $options[mt_rand(0, 3)];

// 確認用コード
// echo ("<pre>");
// var_dump($question);
// echo ("</pre>");

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php04">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください。</p>
                <p class="question__text">
                    <!-- 問題のステータスコードの説明文を表示。正解の配列の中からキーがdescriptionのものを表示させる -->
                    <?php echo $question["description"] ?>
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="POST">
                <!-- 解答となるデータの送信 -->
                <!-- typeがhiddenとなっているのはブラウザに表示をさせないため。この記述があることでブラウザに表示させず、データの送信を行うことができる -->
                <input type="hidden" name="answer_code" value="<?php echo $question["code"] ?>">
                <div class="quiz-form__item">
                    <!-- 選択肢となる説明文を全部で4つ表示させる。ランダムに取得した4つの配列をforeach文で回し一つ一つの説明文を表示させる -->
                    <?php foreach ($options as $option): ?>
                        <div class="quiz-form__group">
                            <!-- inputタグのid属性とlabelタグのfor属性に同じものを指定することで、inputタグと紐づけることができ、label要素をクリックすることでinputにチェックをつけることができる -->
                            <!-- 選択肢の連想配列からcodeのキーを指定 -->
                            <input class="quiz-form__radio" id="<?php echo $option["code"] ?>" type="radio" name="option" value="<?php echo $option["code"] ?>">
                            <label class="quiz-form__label" for="<?php echo $option["code"] ?>">
                                <!-- ↓この記述でボタン上に文字を表示する -->
                                <?php echo $option["code"] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>