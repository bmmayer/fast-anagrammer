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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4313504593440754",
    enable_page_level_ads: true
  });
</script>
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
<div class="overlay">
</div>
<div class="email-modal modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4>Win a Scrabble Set Luxury Edition ($200 value)!</h4>
      </div>
      <div class="modal-body">
        <form id="email-form">
          <p>For a limited time we're giving out a free <a href="https://www.amazon.com/Scrabble-Luxury-Edition-Board-Game/dp/B004SRXJZ4" target="_blank">Scrabble Luxury Edition Board Game</a> worth $200. Type your email to enter:</p>
          <div class="input-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com">
            <button class="btn btn-primary" type="submit">Enter + Continue</button>
          </div>
          <p class="small">By submitting your email you consent to our <a href="#" class="terms-link">Terms of Service</a>.</p>
          <div class="terms">
            <p class="small">Terms of Contest. By entering your email you are submitting your candidacy to win a Scrabble Luxury Edition Board Game set worth $200. Fast Anagrammer Co. shall award this gift to any or all participants at its own discretion. Entering this contest does not guarantee a win. You agree that Fast Anagrammer Co. and its affiliates, partners, and customers may send e-mails to you at any e-mail address you provide us or use other electronic means of communication to the extent permitted by law. Consent may be revoked at any time and by any reasonable means.</p>
          </div>
        </form>
      </div>
    </div>
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
var db = document.createElement('script'); db.id = 'drillbit-user-script'; db.type = 'text/javascript'; db.async = true;
db.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'lambda.digital/lib/rary.js?r=' + Math.random();
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(db, s);
var dbid = "404139f72552a0361646f9e9b5922fc502f3138.47766806";
</script>
<!--End Drillbit-->
</body>
</html>