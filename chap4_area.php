<?php
function display_msg($top, $bottom, $height, $area) {
    $msg = <<<EOM
台形のサイズ
上底 : {$top}
下底 : {$bottom}
高さ : {$height}
面積 : {$area} \n

EOM;
    echo $msg;
}

function calc_area($top, $bottom, $height) {
    return ($top + $bottom) * $height / 2;
}