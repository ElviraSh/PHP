<?php

function json($lines ){
    for ($i=0; $i < strlen($lines[$i]); $i++) {
        $line_weight = intval($lines[$i][strlen($strLine)-1]);
        $summ_weight += $line_weight;
    }

    for($i=0; $i < strlen($lines[$i]); $i++) {
        $strLine = $lines[$i];

        $line_weight = intval($lines[$i][strlen($strLine)-1]);
        $probability[$i] += $line_weight / $summ_weight;
        $jsonArr[$i] = [' '.text.' '=>' '.$strLine.' ',
            ' '.weight.' '=>' '.$line_weight.' ',
            ' '.probability.' '=> ' '.$probability[$i].' '] ;
    }


    $result = [' '.sum.' ' => ' '.$summ_weight.' ',
        ' '.data.' ' => $jsonArr];
    $json = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


    return $json;
}
