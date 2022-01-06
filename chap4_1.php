<?php
require_once __DIR__ . "/chap4_area.php";
$numbers = [
    [
        "top" => 10,
        "bottom" => 20,
        "height" => 30
    ],
    [
        "top" => 40,
        "bottom" => 50,
        "height" => 60
    ],
];

foreach ($numbers as $number) {
    $area = calc_area($number["top"], $number["bottom"], $number["height"]);
    display_msg($number["top"], $number["bottom"], $number["height"], $area);
}
