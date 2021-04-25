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
				<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css'>
				<script src='https://code.jquery.com/jquery-3.6.0.js' integrity='sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=' crossorigin='anonymous'></script>
                <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
				<script src='https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js'></script>
				              

			</head>";
}
function body($title){
	echo "<body>";
	echo "<nav class='navbar navbar-expand-md bg-success fixed-top navbar-dark'>
	<!-- Brand -->
	<a class='navbar-brand' href='/app.php'><i class='fab fa-bitcoin fa-2x'></i></img></a>
  
	<!-- Toggler/collapsibe Button -->
	<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
	  <span class='navbar-toggler-icon'></span>
	</button>
  
	<!-- Navbar links -->
	<div class='collapse navbar-collapse' id='collapsibleNavbar'>
	  <ul class='navbar-nav ml-auto'>
		<li class='nav-item'>
		  <a class='nav-link' href='/app.php'>Home</a>
		</li>
		<li class='nav-item'>
		  <a class='nav-link' href='/news.php'>News</a>
		</li>
		<li class='nav-item'>
		  <a class='nav-link' href='/about.php'>About</a>
		</li>
	  </ul>
	</div>
  </nav>";
	echo "<div id='mainContainer'>";
	echo "<div style='width: 100%; margin-top: 5%'><script defer src='https://www.livecoinwatch.com/static/lcw-widget.js'></script> <div class='livecoinwatch-widget-5' lcw-base='USD' lcw-color-tx='#999999' lcw-marquee-1='coins' lcw-marquee-2='movers' lcw-marquee-items='10' ></div></div>";
}

function footer($title){
	echo "</div>
		  </div>
		  </body>
		  <div style='margin-top: 10%;'></div>
		  <footer class='footer bg-success'>
			<div class='container-fluid text-center'>
				<span><a href='https://cryptoconverter.uwmsois.com'><p style='color: white;'>Crypto Converter App</p></a></span>
			</div>
		  </footer>

		  </html>";
}


?>