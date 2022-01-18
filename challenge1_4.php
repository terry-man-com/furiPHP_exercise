<?php
require_once __DIR__ . "/challenge1_func.php";

$teams = [
    ["member" => "勇者", "enemy" => "魔王", "attack_point" => 6],
    ["member" => "魔王", "enemy" => "勇者", "attack_point" => 4]
];

foreach($teams as $team) {
    $damage = get_damage($team["attack_point"]);
    create_msg($team["member"], $team["enemy"], $damage);
}