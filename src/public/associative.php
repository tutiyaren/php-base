<?php 
$countries = [
    "ブラジル" => 100,
    "日本" => 150,
    "スペイン" => 50000
];
foreach($countries as $key => $value) {
    echo $key . ':　' . $value . '人';
    echo '<br>';
}