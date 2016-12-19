<?php 
	$name = "./$argv[1]";
	$count=0;
	$file= file_get_contents($name);
	$pattern = "/error/";
	preg_match_all ($pattern, $file, $matches);
	echo "$matches";
	//foreach ($matches as $value){
//		$count = $count + 1;
 //}
//	echo "number of errors is $count";
	
?>
