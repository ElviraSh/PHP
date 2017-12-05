<?php

include 'json_function.php';
include 'generator_function.php';
$inputLines = $_GET['text'];
$lines_text= preg_split('/\\r\\n?|\\n/', $inputLines);





$output_JSON = json($lines_text, $weight);
	printf("<pre>%s</pre>", $output_JSON);


$output_Random_Probability = check_generator(count($lines_text), $probabilityRandom, $lines_text);
	printf("<pre>%s</pre>", $output_Random_Probability);




?>
