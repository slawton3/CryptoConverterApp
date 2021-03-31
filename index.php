<?php

function head($title){
	session_start();
	
	echo "<html>
			<head>
				<title>".$title."</title>
				<meta charset='utf-8' />
				<meta name='viewport' content='width=device-width, initial-scale=1.0' />
				<link rel='stylesheet' href='css/style.css' />
				<link rel='icon' href='Images/Bitcoin-icon.png' type='image/gif'>
				<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
                <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
				<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css'>
				<script src='https://code.jquery.com/jquery-3.6.0.js' integrity='sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=' crossorigin='anonymous'></script>
                <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
				<script src='https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js'></script>
				<script src='js/cookies.js'></script>
                                

			</head>";
}
function body($title){
	echo "<body>";
	echo "<!-- The sidebar -->
			<div class='sidebar'>
			<a href='/app.php'><i class='fa fa-fw fa-home'></i> Home</a>
			<a href='/news.php'><i class='far fa-newspaper'></i> News</a>
			<a href='/about.php'><i class='far fa-question-circle'></i> About</a>
			</div>";
	echo "<div id='mainContainer'>";
	echo "<script defer src='https://www.livecoinwatch.com/static/lcw-widget.js'></script> <div class='livecoinwatch-widget-5' lcw-base='USD' lcw-color-tx='#999999' lcw-marquee-1='coins' lcw-marquee-2='movers' lcw-marquee-items='10' ></div>";
}

function footer($title){
	echo "</div>
		  </div>
		  </body>

		  </html>";
}


?>