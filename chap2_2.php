<?php
var_dump("数字を入力してください");
$num = trim(fgets(STDIN));
if(is_numeric($num) && $num % 2 == 0) {
    var_dump($num . "は偶数です");
} elseif(is_numeric($num)) {
    var_dump($num . "は奇数です");
}