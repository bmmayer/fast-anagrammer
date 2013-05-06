<?php

require_once("init.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fast Anagrammer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
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
<form action="index.php" method="post">
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

if($_POST['q']){

?>
<table class="table table-hover anagram-table">
<tbody>
<?php


$q = strtoupper(strip_tags(str_replace(" ","",$_POST['q'])));
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
<div class="copyright">
	<div class="container">
  	<p>&copy; <?php echo date("Y"); ?> <a href="http://brianmayer.com">Brian Mayer</a>.  All rights reserved.</p>
  </div>
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