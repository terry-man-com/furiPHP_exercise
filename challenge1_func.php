<?php
function create_msg($attacker,$enemy,$damage) {
    $msg = <<<EOM
{$attacker}は、
{$enemy}に攻撃した。

クリティカルヒット!!

{$attacker}は、{$damage}のダメージを受けた。\n

EOM;
    echo $msg;
}

function get_damage($attack_point) {
    return random_int(100, 500) * $attack_point;
}