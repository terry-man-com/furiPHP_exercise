<?php
require_once __DIR__ . "/chap4_price.php";
var_dump("お名前は？");
$name = trim(fgets(STDIN));

var_dump("1つ目の金額を入力");
$item1 = trim(fgets(STDIN));

var_dump("2つ目の金額を入力");
$item2 = trim(fgets(STDIN));

var_dump("3つ目の金額を入力");
$item3 = trim(fgets(STDIN));

$sum = add($item1, $item2, $item3);

$price = total_tax($sum);

display_msg($name, $sum, $price);
