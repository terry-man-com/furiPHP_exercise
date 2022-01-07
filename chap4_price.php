<?php
function display_msg($name, $sum, $price)
{
    $msg = <<<EOM
{$name}様
ご注文を承りました。
合計は{$sum}円です。
{$price}円(税込)になります。\n
EOM;
    echo $msg;
}

function add($item1, $item2, $item3)
{
    return $item1 + $item2 + $item3;
}


function total_tax($sum)
{
    return floor($sum * 1.1);
}
