<?php
$hit_point = 10000;

while ($hit_point  > 0) {
    $msg = <<<EOM
攻撃技は？
１.剣 2.魔法 3.打撃
EOM;

    echo $msg . "\n";

    $number = trim(fgets(STDIN));

    echo $number;

    $attack = random_int(500, 3000);

    $life = $hit_point - $attack;
    $damage = <<<EOM
攻撃力:{$attack}の攻撃!
HP:{$life}
EOM;

    if (($number == 1 || $number == 2 || $number == 3) && $attack >= 2000) {
        echo "クリティカルヒット" . "\n";
        echo $damage . "\n";
    } elseif ($number == 1 || $number == 2 || $number == 3) {
        echo $damage . "\n";
    } else {
        echo "攻撃に失敗" . "\n";
    }

    $hit_point = $life;

    if ($hit_point < 0) {
        echo "敵を倒した!" . "\n";
    }
}
