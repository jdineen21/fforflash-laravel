<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
		<title>F For Flash | League of Legends</title>
		<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css" />
		<link rel="shortcut icon" href="css/images/Flash.ico" />
	</head>
</head>

<html>
	<body>
		<div class="relative_navbar">
			<div class="navbar_wrapper">
				<a href="/">FForFlash.com</a>
				<p>Providing the most recent patch data and statistics</p>
			</div>
		</div>
		<div class="navbar">
			<ul>
				<li>
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/tier">Tier List</a>
				</li>
				<li>
					<a href="/champions">Champions</a>
				</li>
				<li>
					<a href="/summoner">Summoner</a>
				</li>
				<li>
					<a href="/champion-select">Champion Select</a>
				</li>
				<li>
					<a href="/contact">Contact Us</a>
				</li>
				{{-- <li id="logo">
					<img src="css/images/logo.png"/>
				</li> --}}
				<li>
					<form action="http://www.fforflash.com/search" method="get">
						<input type="text" name="query" placeholder="Search This Site" class="textbox">
						{{-- Fix submit button --}}
						{{-- <a href="/search"><div class="submit_div"></div></a> --}}
					</form>
				</li>
			</ul>
		</div>
		<div class="wrapper">
			{{-- <div class="top_bar">
				<a href="../guide-builder">
					<div class="create_new_guide">
						<h3>Guide Builder</h3>
						<h4>Make a New Guide</h4>
					</div>
				</a>
				<img src="css/images/logo.png"/>
			</div> --}}
			<div class="content">
                @yield('content')
            </div>
            <div class="footer">
                <h3>League of Legends Champions</h3>
                <div id="champion_links">
					@foreach ($champions as $champion)

					<a href="/champion/{{ $champion->key }}">{{ $champion->name }}</a>

					@endforeach
                </div>
                <div id="info_div">
					<h2>F For Flash</h2>
					<!--
                    <a href="https://www.facebook.com/fforflash" style="margin-right:15px;">
                        <img src="css/images/facebook.png">Facebook
                    </a>
                    <a href="https://www.twitter.com/fforflash">
                        <img src="images/twitter.png">Twitter
                    </a>
                    -->
                </div>
                <div id="info_div" style="padding-top:0;">
                    {{-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Footer -->
                    <ins class="adsbygoogle"
                        style="display:block" 
                        data-ad-client="ca-pub-7863230509285032" 
                        data-ad-slot="6071334902" 
                        data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Footer 2 -->
                    <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-7863230509285032"
                            data-ad-slot="7118932500"
                            data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script> --}}
                    <a style="margin-right:15px;margin-bottom:10px;color:#AAA;font-size:12px;">
                        &copy; Joe Dineen 2019
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>