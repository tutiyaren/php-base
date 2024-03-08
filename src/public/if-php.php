<?php
echo '数字を入力してください' . PHP_EOL;
$num = trim(fgets(STDIN));
if(is_numeric($num)) {
    if($num >= 1 && $num <= 3) {
        echo '凶 ' . PHP_EOL;
    } elseif($num >= 4 && $num <= 7) {
        echo '吉' . PHP_EOL;
    } else {
        echo '大吉' . PHP_EOL;
    }
} else {
    echo '半角数字を入力してください' . PHP_EOL;
}
