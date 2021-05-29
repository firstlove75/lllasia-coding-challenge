<?php
$arrFirst = ['Ava', 'Emma', 'Olivia'];
$arrSec = ['Olivia', 'Sophia', 'Emma'];
$res = unique_names($arrFirst, $arrSec);
print_r($res);

function unique_names($arrFirst, $arrSec) {
    $countF = count($arrFirst);
    $countS = count($arrSec);
    
    $tmpArr = [];
    for ($i = 0; $i < $countF; $i++) {
        for ($j = 0; $j < $countS; $j++) {
            if ($arrSec[$j] != $arrFirst[$i]) {
                $tmpArr[$arrSec[$j]] = $arrSec[$j];
            }
        }
        if (!isset($tmpArr[$arrFirst[$i]])) {
            $tmpArr[$arrFirst[$i]] = $arrFirst[$i];
        }
    }
    return array_values($tmpArr);
}
