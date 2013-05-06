<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fast Anagrammer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
<body>
  <div class="container">

<div class="row" style="margin-top:100px;">
<div class="span6 offset3">
<a href="http://fastanagrammer.com"><img src="logo.png" style="width:100%" /></a>
</div>
</div>
<div class="row" style="margin-top:70px;">
<div class="span6 offset3">
<form action="index.php" method="get">
<div class="input-append">
  <input class="span2 large" id="appendedInputButton" type="text" name="q" style="width:350px">
  <button class="btn btn-primary" type="button" onclick="submit();">Anagram!</button>
</div>
</form>
</div>
</div>
<div class="row" style="margin-top:20px;">
<div class="span6 offset3" style="text-align:center">
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

if($_GET['q']){

?>
<table class="table table-hover">
<tbody>
<?php


$q = strtoupper(strip_tags(str_replace(" ","",$_GET['q'])));
$stack = array();

if(strlen($q)>80){
	echo "<tr class='error'><td>Can't do more than 80 characters...</td></tr>";
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
		echo "<tr><td>".$string."</td></tr>";
	}
}

?>

</tbody>
</table>

<?php } ?>
</div></div>
  </div>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21430975-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>