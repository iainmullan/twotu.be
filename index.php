<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/twotube.css">

        <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.24.custom.css" />

		<title>TwoTube - A YouTube Crossfader</title>
		
		<meta property="fb:admins" content="714655333" />

		<meta property="og:site_name" content="Two Tube" />
		<meta property="og:title" content="Two Tube" />
		<meta property="og:url" content="http://twotu.be" />
		<meta property="og:description" content="A YouTube Crossfader" />

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<?php include('fork.php'); ?>
		
<div id="content">

	<header>
		<h1><span class="two">Two</span><span class="tube">Tube</span></h1>
		<h2>A YouTube Crossfader</h2>
		<br class="clear" />
	</header>

	<div id="slider"></div>

	<?php for($i=1; $i<=2;$i++): ?>
	<div class="player-container" id="player<?php echo $i; ?>">
		<div id="p<?php echo $i; ?>" class="video">
		  You need Flash player 8+ and JavaScript enabled to view this video.
		</div>
		<br/>
		<form rel="<?php echo $i; ?>">
			<input type="text" class="input" placeholder="Search..." />
		</form>
		<div class="search-results"></div>
	</div>
	<?php endfor; ?>

	<br class="clear" />
</div>



<footer>
	<div class="inner">
	<div class="share">
		<div class="fb-like" data-href="http://twotu.be/" data-send="false" data-width="450" data-show-faces="true"></div>
	</div>
	<div class="credits">
		<span>an <a href="http://www.ebotunes.com">ebotunes</a> production</span> by <a href="http://twitter.com/iainmullan">@iainmullan</a>
	</div>
	</div>
</footer>
</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

	<script type="text/javascript" src="swfobject/swfobject.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>


	<script>
	    var _gaq=[['_setAccount','UA-323014-31'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

</body>
</html>
