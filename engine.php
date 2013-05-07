<?php

include("init.php");

$q = strip_nonalpha(strtoupper(strip_tags(str_replace(" ","",$_POST['q']))));
$quoteQ = strip_nonalpha(strtoupper(strip_tags($_POST['q'])));
$stack = array();

$return = array();
$return["old"] = array();
$return["results"] = array();

if(strlen($q)>80){
	$return["error"] = "Can't do more than 80 characters...";
} else if(strlen($q)<2){
	$return["error"] = "Please enter more than one character.";
} else {
	$file_handle = fopen("en_US.txt", "r");
	while (!feof($file_handle)) {
		$line = strtoupper(fgets($file_handle));
		$stringArray = str_split($line);
		$popped = array_pop($stringArray);
		$repopped = array_pop($stringArray);	
		if(is_anagram($q,$line,$stringArray)){
			$stack[$line] = strlen($line)-2;
		}
	}
	fclose($file_handle);
	arsort($stack);
	foreach($stack as $string=>$length){
		$return["results"][] = trim($string);
	}
}

$return["old"] = $quoteQ;

echo json_encode($return);

?>