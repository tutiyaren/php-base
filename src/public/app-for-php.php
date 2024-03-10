<?php
echo '数字を入力してください' . PHP_EOL;
$inputNum = trim(fgets(STDIN));

if (!(is_numeric($inputNum))) {
    echo '数字を入力してください' . PHP_EOL;
    return;
}

$firstNum = 1;
$resultNum = 0;
$addInputNum = $inputNum + 7;
for ($i = $firstNum; $i <= $addInputNum; $i++) {
    $resultNum += $i;
}
echo $addInputNum . '段のピラミッドに必要な人数は' . $resultNum . '人です' . PHP_EOL;

