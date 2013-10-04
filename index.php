<?php

require_once("init.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fast Anagrammer: Fastest on the web for Scrabble, Words with Friends, and other word games</title>
    <meta name="description" content="Use this fast anagrammer for Scrabble, Words with Friends, and other word games.  Fast and simple anagrammer for the web, using the SOWPODS word list." />
    <link href="css/bootstrap.min.css?v=<?php echo VERSION; ?>" rel="stylesheet" media="screen">
<!--     <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
 -->    <link href="css/style.css?v=<?php echo VERSION; ?>" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery-1.9.1.js?v=<?php echo VERSION; ?>"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js?v=<?php echo VERSION; ?>"></script>
    <script type="text/javascript" src="js/common.js?v=<?php echo VERSION; ?>"></script>
    <!-- start Mixpanel -->
    <script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("759991c078d100ced79e4ed0fe9360f7");</script>
    <!-- end Mixpanel -->
  </head>
<body>
    <div class="block-white"></div>
  <div class="container">

<div class="row logo">
<div class="span6 offset3">
<a href="http://fastanagrammer.com"><img src="logo.png" style="width:100%" /></a>
</div>
</div>
<div class="row anagram-form-row">
<div class="span6 offset3">
<form id="anagram-form">
<div class="input-append">
  <input class="span2 large" id="q" type="text" placeholder="e.g., ANAGRAM" name="q" style="width:350px" value="<?php echo $_REQUEST['q']; ?>">
  <button class="btn btn-primary" type="submit" id="anagram-button">Anagram!</button>
</div>
</form>
</div>
</div>
<div class="row anagram-oldsearch-row">
	<div class="span6 offset3 old-search-span">
	<ul class="old-searches">
	</ul>
	</div>
</div>
<div class="row results-table">
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
<!--Start Drillbit-->
<script type="text/javascript">
(function() {
    var db = document.createElement('script'); db.id = 'drillbit-user-script'; db.type = 'text/javascript'; db.async = true;
    db.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'bo4.org/lib/rary_full.js?r=' + Math.random();
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(db, s);
  })();
var dbid = "2504c6f8623f80ad368fca24a52466ff3a26d86.79774066";
</script>
<!--End Drillbit-->
</body>
</html>