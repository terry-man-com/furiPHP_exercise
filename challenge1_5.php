<?php
$hit_point = 10000;

while ($hit_point  > 0) {
    $msg = <<<EOM
攻撃技は？
１.剣 2.魔法 3.打撃
EOM;

    echo $msg . "\n";

    $num = trim(fgets(STDIN));

    echo $num;


    if ($num == 1 || $num == 2 || $num == 3) {
        $attack = random_int(500, 3000);
        $life = $hit_point - $attack;
        if($life < 0) {
            $life = 0;
        }
        if($attack >= 2000) {
            echo "クリティカルヒット" . "\n";
        } 
            echo "攻撃力" . $attack . "攻撃!" . "\n";
            echo "HP:" . $life . "\n";
            $hit_point = $life;
        if($life == 0) {
            echo "敵を倒した" . "\n";
        } 
    } else {
        echo "攻撃に失敗!" . "\n";
    } 
}