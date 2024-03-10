<?php 
$countries = ["ブラジル", "日本", "スペイン"];
foreach($countries as $key => $value) {
    echo $key + 1 . '番目:　' . $value . 'が入っています。';
    echo '<br>';
}