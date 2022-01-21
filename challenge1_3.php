<?php
$team_a = ["勇者", "戦士", "魔法使い"];
$team_b = ["盗賊", "忍者", "商人"];
$team_c = ["スライム", "ドラゴン", "魔王"];
$all_teams = [$team_a ,$team_b, $team_c];

/* $all_teams = [
    ["勇者", "戦士", "魔法使い"],
    ["盗賊", "忍者", "商人"],
    ["スライム", "ドラゴン", "魔王"]
];    */

/*foreach($all_teams as $teams) {
    echo $teams[0] . "\n" . $teams[1] . "\n" . $teams[2] . "\n";
};*/

foreach($all_teams as $teams) {
    foreach($teams as $team) {
        echo $team . "\n";
    };
};