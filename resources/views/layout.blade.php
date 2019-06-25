<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
		<title>F For Flash | League of Legends</title>
		<link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}" type="text/css" />
		<link rel="shortcut icon" href="css/images/Flash.ico" />
	</head>
</head>

<html>
	<body>
		<div class="relative_navbar">
			<div class="navbar_wrapper">
				<div class="registration">
					<a href="http://www.fforflash.com">FForFlash.com</a>
				</div>
				<div class="registration" style="padding-right:0px;">
					<?php
						// if (empty($_SESSION["userReference"])) {
						// 	echo '
						// 	<a href="../login">Log In</a>
						// 	<a href="../register" id="end">Register</a>
						// 	';
						// } else {
						// 	echo '
						// 	<a href="../profile.php?username=' . $_SESSION["username"] . '">' . $_SESSION["username"] . '</a>
						// 	<a href="../login/signout.php?currenturl=' . $_SERVER['REQUEST_URI'] . '" id="end">Sign out</a>
						// 	';
						// }
					?>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="top_bar">
				<a href="../guide-builder">
					<div class="create_new_guide">
						<h3>Guide Builder</h3>
						<h4>Make a New Guide</h4>
					</div>
				</a>
				<h1>F For Flash</h1>
				<img src="css/images/FFFLogo.jpg"/>
			</div>
			<div class="navbar">
				<a href="" >
					<div class="tab">
						Home
					</div>
				</a>
				<a href="guides" >
					<div class="tab">
						Guides
					</div>
				</a>
				<a href="champion-select" >
					<div class="tab">
						Champ Select
					</div>
				</a>
				<a href="summoner-info" >
					<div class="tab">
						Summoner Info
					</div>
				</a>
				<a href="contact" >
					<div class="tab">
						Contact
					</div>
				</a>
				<form id="form" action="http://www.fforflash.com/search" method="get">
					<div class="form_div">
						<input type="text" name="query" placeholder="Search This Site" class="textbox">
						<div class="submit_div">
							<input type="submit">
						</div>
					</div>
				</form>
			</div>
			<div class="content">
                @yield('content')
            </div>
            <div class="footer">
                <h3>League of Legends Champions</h3>
                <div id="champion_links">
                    <?php
                    // $myfile = fopen("text/champions.txt", "r") or die("Unable to open file!");
                    // $champs = fread($myfile,filesize("text/champions.txt"));
                    // fclose($myfile);
                    
                    // $champion = explode(":", $champs);
                    // $lengthArray = (count($champion) - 1);
                    
                    // for ($x = 0; $x <= $lengthArray; $x++) {
                    //     echo '<a href="../guides/' . strtolower($champion[$x]) . '-guide">' . $champion[$x] . '</a>';
                    // }
                    ?>
                </div>
                <div id="info_div">
                    <h2 style="padding-bottom:10px;">F For Flash Network</h2>
                    <a href="https://www.facebook.com/fforflash" style="margin-right:15px;">
                        <img src="css/images/facebook.png">Facebook
                    </a>
                    <!--
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