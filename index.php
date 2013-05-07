<?php

require_once("init.php");

$_REQUEST['old'] = strip_nonalpha($_REQUEST['old']);
$_REQUEST['q'] = strip_nonalpha($_REQUEST['q']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fast Anagrammer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<!--     <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
 -->    <link href="css/style.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
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
<form action="index.php" method="post" id="anagram-form">
<div class="input-append">
  <input class="span2 large" id="q" type="text" name="q" style="width:350px" value="<?php echo $_REQUEST['q']; ?>">
  <button class="btn btn-primary" type="submit" id="anagram-button">Anagram!</button>
</div>
</form>
</div>
</div>
<div class="row">
	<div class="span6 offset3 old-search-span">
	<ul class="old-searches">
	</ul>
	</div>
</div>
<div class="row" style="margin-top:20px;">
<div class="span6 offset3" style="text-align:center">

<table class="table table-hover anagram-table hidden">
<tbody>
</tbody>
</table>

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