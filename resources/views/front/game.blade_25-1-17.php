<!DOCTYPE html>

<html>
<head>
    <title>Welcome to I have you have</title>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery.ui.js')}}"></script>
        <script>BASE_URL = "{{ URL::route('home') }}" ;</script>
        <script src="{{asset('js/card.js')}}"></script>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/styles.css') }}">
        
</head>

<body class="gameBody">
<div class="gamewrapper">
		<div class="gameTopBox">
			<div class="gameToQBox">
				<p class="help"><a href="javascript:void(0)" title="Help" class="help-btn">Help</a></p>
                    <p class="help-ans-p"><span></span></p>
				<p class="questions-container">
                    <label class="question"></label>
                    
                </p>
                <p>
                    <label class="ans-panel">
                    <img src="/images/qr.png" class="right"/>
                    <img src="/images/qw.png" class="wrong"/>
                    <span></span>
                    </label>
                </p>
			</div>
            <ul class="game-container">
            @for($x=0;$x<26;$x++)
                <li class="black{{ $x+1 }} card-question {{ (($x==0)?'active':'') }}" data-count="0" data-card="" data-ans=""  data-qus=""></li>
            @endfor
            </ul>
        </div>

        <ul class="ansImgPan card-container">
        @foreach($display_cards as $c)
        <li data-card="{{ $c->id }}"  class="card" data-answer="{{ $c->answer }}" data-question="{{ $c->description }}">
                <img src="{{asset('uploads/card/'.$c->image_name)}}"/>
        </li>
        @endforeach
        </ul>
</div>
<div class="hover-modal"></div>
</body>
</html>
