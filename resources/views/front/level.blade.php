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
		<div class="logo"><img src="images/aqua-logo.png" alt=""></div>
		<a href="{{ URL::route('set_level',[1]) }}" title="" class="level">Level 1</a>
        <a href="{{ URL::route('set_level',[2]) }}" title="" class="level">Level 2</a>
		<a href="{{ URL::route('game') }}" title="" class="playButton"><img src="images/play-button.png" alt=""></a>
	</div>
</body>
</html>