<!DOCTYPE html>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/config.php"); ?>

<html lang="en">
<head>
	<title>CryptoManna</title>

	<meta charset="UTF-8">
	<meta name="theme-color" content="#08253b"> <!-- Dark blue -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Lets you pick random mannas from a compilation of over two thousand awesome Bible passages.">

	<meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] ?>">
	<meta property="og:title" content="CryptoManna">
	<meta property="og:description" content="Lets you pick random mannas from a compilation of over two thousand awesome Bible passages.">
	<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/resources/images/touch-icon-500px.png">

	<link rel="shortcut icon" href="/resources/images/favicon.png">
	<link rel="apple-touch-icon" href="/resources/images/touch-icon-500px.png">

	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-iphone-se.png" media="(device-width: 320px)">
	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-iphone-6s-7-8.png" media="(device-width: 375px) and (-webkit-device-pixel-ratio: 2)">
	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-iphone-6splus-7plus-8plus.png" media="(device-width: 414px) and (-webkit-device-pixel-ratio: 3)">
	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-iphone-x.png" media="(device-width: 375px) and (-webkit-device-pixel-ratio: 3)">

	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-ipad.png" media="(device-width: 768px) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-ipad-landscape.png" media="(device-width: 768px) and (orientation: landscape)">
	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-ipad-retina.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
	<link rel="apple-touch-startup-image" href="/resources/images/splash-screen-ipad-retina-landscape.png" media="(device-width: 1536px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" href="/vendors/fontawesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="/vendors/select2/css/select2.min.css">
	<link rel="stylesheet" href="/resources/css/app.css">
	<link rel="manifest" href="/manifest.json">

	<?php if(!empty($_config_google_analytics_id)) : ?>
		<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $config_google_analytics_id ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '<?= $config_google_analytics_id ?>');
		</script>
	<?php endif; ?>
</head>
<body>
	<div id="getCryptoManna">Get a manna</div>

	<div class="manna">
		<div class="mannaTitle"></div>
		<div class="mannaText"></div>
		<div class="clickInfo">Click the big red button!</div>
		<div class="loading">
			<div class="progress">
				<div class="a"></div>
				<div class="b"></div>
				<div class="c"></div>
				<div class="d"></div>
			</div>
			<div class="clear"></div>
			<span></span>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<span id="prev" class="paging"><i class="fas fa-arrow-left"></i></span>
			<span id="menuTrigger">Menu</span>
			<span id="next" class="paging"><i class="fas fa-arrow-right"></i></span>
		</div>
	</div>

	<div class="section menu">
		<ul>
			<li id="welcome"><span class="icon"><i class="fas fa-home"></i></span>Welcome</li>
			<li id="language"><span class="icon"><i class="fas fa-comment-alt"></i></span>Change language</li>
			<li id="add"><span class="icon"><i class="fas fa-arrow-alt-circle-down"></i></span>Add to home screen</li>
			<li id="report"><span class="icon"><i class="fas fa-exclamation-triangle"></i></span>Report manna</li>
			<li id="share"><span class="icon"><i class="fas fa-share"></i></span>Share app</li>
			<li id="clear"><span class="icon"><i class="fas fa-history"></i></span>Clear history</li>
		</ul>
	</div>

	<div class="overlay"></div>
	<div class="popup">
		<p></p>
		<div class="linkButton goBack">Got it</div>
	</div>

	<div class="section welcome">
		<h2>Get your daily manna</h2>
		<p>This app lets you pick random <a href="https://en.wikipedia.org/wiki/Manna" target="_blank">mannas</a> from a compilation of over two thousand awesome Bible passages.</p>
		<p>
			<i class="fas fa-random"></i>
			<b>Truly random</b><br>
			<span>We use advanced <a href="https://en.wikipedia.org/wiki/Cryptography" target="_blank">cryptographics</a> to make sure the manna you get is truly random.</span>
		</p>
		<p>
			<i class="fas fa-comment-alt"></i>
			<b>1000 languages</b><br>
			<span>Choose your favorite Bible-version from a list of over one thousand languages.</span>
		</p>
		<p>
			<i class="fas fa-history"></i>
			<b>Stored history</b><br>
			<span>The ten previous mannas you picked are stored, in case you wish to have a second look. Just use the arrows near the bottom of the screen.</span>
		</p>
		<p>
			<i class="fas fa-code"></i>
			<b>Open source</b><br>
			<span>The code behind this app is fully <a href="https://github.com/cgilbu/cryptomanna" target="_blank">open-source</a>. Feel free to check out how the code works, or help us make the app even better!</span>
		</p>
		<div id="welcomeButton" class="linkButton">Click here to get started</div>
		<div class="linkButton goBack">Go back</div>
	</div>

	<div class="section language">
		<h2>Choose your language</h2>
		<p>Your selected Bible: <b class="selectedBible"></b></p>
		<p class="bookWarning"><b>Warning:</b> This translation does not contain all the 66 books of the Bible and the selection of mannas will be limited. We will still provide you with mannas from all the available books.</p>
		<div class="selectLanguage">
			<select id="languages" style="width:100%;"><option></option></select>
		</div>
		<div class="selectBible">
			<select id="bibles" style="width:100%;"><option></option></select>
		</div>
		<div class="listLoader"><img src="/resources/images/loading.gif" alt="Loading"></div>
		<div id="languageButton" class="linkButton">I'm ready</div>
		<div class="linkButton goBack">Go back</div>
	</div>

	<div class="section add">
		<h2>Add to home screen</h2>
		<p id="Apple">To add this app to your home screen, please navigate to this web page via the <b>Safari</b> browser. Then tap the <b>Share button</b> at the bottom of the browser window. It looks like a square with an up-arrow in the foreground. Select the option labeled <b>Add to Home Screen</b> (scroll to the right if you don’t see it).</p>
		<p id="Android">If you're using the <b>Chrome</b> browser, you should already have received a request for adding this app to your home screen. If not, please open up the menu and tap <b>Add to Home Screen</b>. If you're using the <b>Firefox</b> browser, simply tap the <b>house icon</b> right next to the address bar.</p>
		<p id="Windows">To add this app to your home screen, please navigate to this web page via the default <b>Windows browser</b>. Then open up the menu and tap <b>Pin to start</b>.</p>
		<p id="Unknown">We're sorry, but we did not recognize your mobile device. You might be viewing this app in a desktop browser. If not, we suggest you Google "How to add a web page to home screen on [your device]".</p>
		<div id="addButton" class="linkButton">That's OK</div>
		<div class="linkButton goBack">Go back</div>
	</div>

	<div class="section report">
		<h2>Report manna</h2>
		<p>If you stumble upon a manna that just doesn’t make sense, it could be a result of human error. A manna usually contains one or more verses put together in an order which makes sense and provides a message. If that's not the case with the manna you picked, feel free to have us check it out by tapping the button below. The manna you're currently viewing (or the last manna you picked) will be reported.</p>
		<div id="reportButton" class="linkButton">Click here to report manna</div>
		<div class="linkButton goBack">Go back</div>
	</div>

	<script src="/vendors/jquery-3.3.1.min.js"></script>
	<script src="/vendors/select2/js/select2.min.js"></script>

	<script src="/resources/js/api.js"></script>
	<script src="/resources/js/app.js"></script>
	<script src="/resources/js/core.js"></script>
	<script src="/resources/js/events.js"></script>
	<script src="/resources/js/helpers.js"></script>
	<script src="/resources/js/storage.js"></script>
	<script src="/resources/js/view.js"></script>
</body>
</html>
