<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to I have you have</title>
<link type="text/css" rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="topPart"></div>
		<div class="logo"><img src="/images/aqua-logo.png" alt=""></div>
		<a href="{{ URL::route('how_to_play') }}" title="" class="playButton"><img src="/images/play-button.png" alt=""></a>
		<h1 class="gameName">I have you have</h1>
	</div>
	<div class="footer"><p>&copy;{{date('Y')}} - PF WaterWorks - All Rights Reserved</p></div>  
</body>
</html>