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

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.24.custom.css" />

        <script src="js/vendor/modernizr-2.6.1.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

		<title>TwoTube - A YouTube Crossfader</title>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

<style>
	#content {
		font-family: Arial;
		width: 900px;
		margin: 0 auto;
		color: #555;
		font-size: 13px;
	}
	
	header {
		padding-bottom: 10px;
		margin-bottom: 20px;
		border-bottom: 1px solid #ccc;
	}
	#slider {
		width: 300px;
		margin: 0 auto;
		clear:both;
		position: absolute;
		top: 200px;
		left: 300px;
	}

	#s1 {
		float:left;
	}
	#s2 {
		float:right;
	}

	.video {
		clear:both;
	}
	a, a:link, a:hover {
		color: #555;
	}
	a:active {
		color: #955;
	}
	.player-container {
		width: 440px;
		float:left;
	}
	
	.search-results {
		text-align:left;
		padding-right: 20px;
	}
	.search-results div {
		margin-bottom: 5px;
		padding-top: 5px;
		border-top: 1px solid #999;
		clear:left;
	}
	.search-results div:first-child {
		border: 0;
	}
	.search-results img {
		float:left;
		width: 80px;
		height: 60px;
		margin: 0 10px 0 0;
	}

	#content {
		padding-bottom: 30px;
		position:relative;
	}

	footer {
		background-color: rgba(255,255,255,0.7);
		clear:both;
		text-align:right;
		position:fixed;
		bottom: 0;
		width: 900px;
		margin: 0 auto;
	}
	
	.clear {
		clear:both;
	}
	
	#player2 {
		float: right;
		text-align:right;
	}
	
	#player2 .search-results div img {
		float: right;
		margin: 0 0 0 10px;
	}
	#player2 .search-results div  {
		text-align:right;
	}
	
	.player-container form input {
		width: 315px;
	}
	#player2 form input {
		margin-right: 3px;
	}
	
	h1 span.two {
		padding: 5px 3px 5px 0;
	}
	h1 span.tube {
		background-color: red;
		color: white;
		padding: 5px 8px;
	}
	
	h1,h2 {
		width: 50%;
		float: left;
	}
	
	h2 {
		text-align:right;
		font-size: 2em;
	}

	
</style>

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


</div>

<footer>
	<span>an <a href="http://www.ebotunes.com">ebotunes</a> production</span> by <a href="http://twitter.com/iainmullan">@iainmullan</a>
</footer>


		<script type="text/javascript" src="swfobject/swfobject.js"></script>

		  <script type="text/javascript">

		    var params = { allowScriptAccess: "always" };

		    swfobject.embedSWF("http://www.youtube.com/v/Bk1-oqNvOlk?enablejsapi=1&playerapiid=p1&version=3&autoplay=0",
		                       "p1", "320", "260", "8", null, null, params, {id:"p1"});

		    swfobject.embedSWF("http://www.youtube.com/v/8srPkl2PzJ4?enablejsapi=1&playerapiid=p2&version=3&autoplay=0",
		                       "p2", "320", "260", "8", null, null, params, {id:"p2"});

		  </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
