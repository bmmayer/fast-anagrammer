<?php

function is_acceptable($input,$string){

	if(strlen($string)<=(strlen($input)+2) && strlen($input)>0){
		return true;
	}
	
	return false;

}

function is_anagram($input,$string,$stringArray){

	if(!is_acceptable($input,$string)){
		return false;
	}
	foreach($stringArray as $str){
		if(strpos($input,$str) === false){
			return false;
		}
		if(substr_count($string,$str)>substr_count($input,$str)){
			return false;
		}
	}
	
	return true;
	
}

?>