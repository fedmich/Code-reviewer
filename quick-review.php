<?php
	$arr = array(1,2,3,4,0,'',2,' aa ');
	/*
	sort
	reverse
	unique
	filters
	
	*/
	var_dump($arr);
	
	sort($arr);
	$arr = array_reverse($arr);
	
	$arr = array_filter($arr);	//remove empty or ZERO values
	$arr = array_unique($arr);
	
	$arr = array_map('trim', $arr);
	
	var_dump($arr);
	
	$arr = array_map('intval', $arr);	//turns strings into numbers
	
	var_dump($arr);
	
	$num = 443.33;
	
	var_dump($num);
	
	var_dump( floor($num) );
	
	var_dump( $num - floor($num) ); //remainder
	
	var_dump( abs(-1110) );	//always positive
	
	
	