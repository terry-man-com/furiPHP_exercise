<?php
function display_msg($owner)
{
    echo $owner["name"] . "さんは" . "\n";

    $animal_types = array_unique($owner["animal"]);

    $animal = implode("、", $animal_types);

    $count = count($owner["animal"]);


    $msg = <<<EOM
{$animal}を
{$count}匹飼っています。\n
EOM;
    echo $msg;
}