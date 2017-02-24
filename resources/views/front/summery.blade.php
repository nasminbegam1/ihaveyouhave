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
		<div class="scorePan"><img src="/images/score.png" alt=""><span>{{ $score }}</span></div>
		<a href="{{ URL::route('game') }}" title="" class="playButton"><img src="/images/play-again.png" alt=""></a>
	</div>
	<div class="footer"><p>&copy;{{date('Y')}} - PF WaterWorks - All Rights Reserved</p></div>  
</body>
</html>