<?php
function searchCityTime($city_name)
{
    require("config/cities.php");
    // foreach文によって2次元配列citiesを一つずつの配列に分解。分解された変数cityには一つ一つのデータが格納されていく。
    foreach ($cities as $city) {
        // 配列のキー'name'が一致したときに処理を行う
        if ($city["name"] === $city_name) {
            // 日付や時間を扱った操作を行うためにDateTimeクラスを使用。DateTimeの引数に何も入れていないときは現在時刻が作成される。
            $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));
            $time = $date_time->format("H:i");
            $city["time"] = $time;

            // returnで関数の結果を返す。戻り値はresult.phpファイルの変数tokyoに格納される。
            return $city;
        }
    }
}
