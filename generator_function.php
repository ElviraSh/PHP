<?php
 function generator($lines){
 	for($i = 0; $i < count($lines); $i++) {
 		$string[$i] = explode(" ", $lines[$i]);
 		echo ($i+1).'. ';
 		for ($j = 0; $j < count($string[$i])-1; $j++) {
 			 $str[$j] = ' '.randomString().' ';
 		}
 			 $result = [' '.text.' ' => $str];
 			 $json = json_encode($result, JSON_UNESCAPED_UNICODE);
 		yield $json;
 	echo '<br>';
 	}
 }

function check_generator($count, $probabilityArr, $allLines){
for ($i=0; $i < 100; $i++) {
		$some[$i] = $allLines[rand(0, 2)];
		$result = [' '.text.' ' => $some[$i]];

	}

return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);	
}

function check_generator_($text,$allLines=10000){
    $ret=[];
    for($i=0;$i<count($text);$i++){
        $ret[$i]['text']=$text[$i]['text'];
        $ret[$i]['count']=0;
        $ret[$i]['calculated_probability']=0;
    }
    foreach(generator($text,$allLines) as $rnd_str)
    {
        for($i=0;$i<count($ret);$i++)
            if(strcmp($ret[$i]['text'],$rnd_str)==0)
            {
                $ret[$i]['count']++;
                $ret[$i]['calculated_probability']=$ret[$i]['count']/$allLines;
            }
    }
    return $ret;
}

?>