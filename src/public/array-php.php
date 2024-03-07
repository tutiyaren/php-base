<?php
$for_array = [];
for($i = 1; $i <= 10; $i++) {
    $for_array[] = $i;
}
$total_array = array_sum($for_array);
echo $total_array;