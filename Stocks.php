<?php
	session_start();
	if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
?>



<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<!doctype html>
<!-- saved from url=(0014)about:internet -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->





	<head>
	
		  <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		  <meta name="description" content="">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  
		  <title>Home Page</title>
		  
		  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		  <link rel="stylesheet" href="css/home.css" />
		  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
		  <link href="https://allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css" />
		  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Lato:400,100,300,700,900|Raleway:400,100,200,300,500,700,800' rel='stylesheet' type='text/css'>
		  <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic' rel='stylesheet' type='text/css'>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 


	    <style type="text/css">
		  
		/*---------------------------------- Loader ------------------------------------*/
		
		html,
		body {
		  background: rgba(11, 12, 19, 1);
		  -webkit-font-smoothing: antialiased;
		  height: 100%;
		  padding: 0;
		  margin: 0;
		}

		body {
		  overflow: hidden;
		}

		body.loaded {
		  overflow-y: auto;
		  overflow-x: hidden;
		}

		.wrapper {
		  height: 100%;
		  padding: 0;
		  margin: 0;
		  overflow: hidden;
		}

		.loading {
		  background: rgba(16, 17, 24, 1);
		  height: 100vh;
		  overflow: hidden;
		  width: 100%;
		  position: absolute;
		  text-align: center;
		  z-index: 1001;
		}

		.svg-wrapper {
		  height: 150px;
		  margin: 0 auto;
		  position: relative;
		  top: 50%;
		  transform: translateY(-50%);
		  width: 150px;
		}

		.animate {
		  fill: transparent;
		  stroke-dasharray: 300;
		  stroke-dashoffset: 600;
		  stroke-width: 1px;
		  stroke: #fdad59;
		}

		.text {
		  color: #fff;
		  display: inline-block;
		  position: relative;
		  top: -110px;
		}

		.logo {
		  display: block;
		  letter-spacing: 2px;
		  font-size: 22px;
		  padding-bottom: 5px;
		  border-bottom: 1px solid #fff;
		  font-family: 'Cinzel';
		}

		.motto {
		  display: block;
		  padding-top: 10px;
		  font-family: 'Cinzel';
		  font-size: 9px;
		  letter-spacing: 3px;
		}
		
		/*---------------------------------- Loader ------------------------------------*/


		/*----------------------------------Desktop navigation------------------------------------*/

		@media screen and (min-width: 610px) {
		  .mobile {
			display: none;
		  }
		  header {
			width: 100%;
			height: 100px;
			line-height: 100px;
			position: fixed;
			-webkit-transition: all .5s;
			transition: all .5s ease;
			z-index: 999;
		  }
		  header #logo {
			float: left;
			margin-left: 5%;
			font-family: 'Open Sans';
			text-transform: uppercase;
			letter-spacing: 5px;
			font-weight: 300;
			font-size: 30px;
			color: #fdad59;
		  }
		  header nav {
			float: right;
			margin-right: 5%;
		  }
		  header nav a {
			position: relative;
			color: #a3a3a3;
			font-size: 18px;
			font-weight: 300;
			font-family: 'Lato', serif, sans-serif;
			text-decoration: none;
			margin-left: 50px;
			border-bottom: 2px solid rgba(255, 255, 255, 0);
			transition: color .25s ease;
		  }
		  nav a:nth-child(2) {
			color: #fdad59;
		  }
		  nav a:hover {
			color: white;
		  }
		  header.resize {
			height: 70px;
			line-height: 70px;
			background: rgb(31, 32, 39);
			border-bottom: 1px solid rgb(46, 48, 56);
		  }
		}


		/*----------------------------------------------------------------------------------------------------*/


		/*----------------------------------------------Mobile Navigation------------------------------------------------*/

		@media screen and (max-width: 609px) {
		  .desktop {
			display: none;
		  }
		  @import url(https://fonts.googleapis.com/css?family=Vollkorn|Roboto);
		  @import url(https://fonts.googleapis.com/css?family=Quicksand);
		  body {
			margin: 0;
			padding: 0;
		  }
		  header {
			width: 100%;
			position: fixed;
			height: 70px;
			line-height: 70px;
			-webkit-transition: all .5s;
			transition: all .5s ease;
			z-index: 999;
		  }
		  header.resize {
			height: 50px;
			line-height: 50px;
			background: rgb(31, 32, 39);
			border-bottom: 1px solid rgb(46, 48, 56);
		  }
		  header.resize .button_container {
			top: 14px;
		  }
		  header.resize #logo {
			font-size: 20px;
		  }
		  #logo {
			float: left;
			margin-left: 20px;
			font-family: 'Open Sans';
			text-transform: uppercase;
			letter-spacing: 5px;
			font-weight: 300;
			font-size: 24px;
			color: #fdad59;
		  }
		  .button_container {
			position: fixed;
			width: 30px;
			height: 25px;
			z-index: 100;
			right: 20px;
			top: 25px;
			cursor: pointer;
			-webkit-transition: all .25s;
			transition: all .25s;
		  }
		  .button_container span {
			width: 30px;
			height: 1px;
			position: absolute;
			background: #fdad59;
			transition: all .35s ease;
		  }
		  .top {
			top: 0px;
		  }
		  .middle {
			top: 10px;
		  }
		  .bottom {
			top: 20px;
		  }
		  .button_container.active .top {
			-webkit-transform: translateY(10px) translateX(0) rotate(45deg);
			transform: translateY(10px) translateX(0) rotate(45deg);
		  }
		  .button_container.active .middle {
			opacity: 0;
		  }
		  .button_container.active .bottom {
			-webkit-transform: translateY(-10px) translateX(0) rotate(-45deg);
			transform: translateY(-10px) translateX(0) rotate(-45deg);
		  }
		  .overlay {
			position: fixed;
			background: rgba(26, 27, 34, 1);
			visibility: hidden;
			width: 100%;
			height: 0%;
			left: 0px;
			top: 0px;
			opacity: 0;
			-webkit-transition: opacity .35s, height .35s, visibility .35s;
			transition: opacity .35s, height .35s, visibility .35s;
			z-index: 1;
		  }
		  .overlay.open {
			height: 100%;
			opacity: .98;
			visibility: visible;
		  }
		  .overlay.open li {
			-webkit-animation: fadeInTop .5s ease forwards;
			animation: fadeInTop .5s ease forwards;
			-webkit-animation-delay: .35s;
			animation-delay: .35s;
		  }
		  .overlay.open li:nth-of-type(2) {
			-webkit-animation-delay: .4s;
			animation-delay: .4s;
		  }
		  .overlay.open li:nth-of-type(3) {
			-webkit-animation-delay: .45s;
			animation-delay: .45s;
		  }
		  .overlay.open li:nth-of-type(4) {
			-webkit-animation-delay: .50s;
			animation-delay: .50s;
		  }
		  .overlay nav {
			position: relative;
			height: 70%;
			top: 50%;
			-webkit-transform: translateY(-50%);
			transform: translateY(-50%);
			font-size: 40px;
			font-family: 'Lato', serif;
			font-weight: lighter;
			letter-spacing: 10px;
			text-align: center;
		  }
		  .overlay ul {
			list-style: none;
			padding: 0;
			margin: 0 auto;
			display: inline-block;
			position: relative;
			height: 100%;
		  }
		  .overlay ul li {
			display: block;
			height: 25%;
			height: calc(100% / 4);
			min-height: 50px;
			position: relative;
			opacity: 0;
		  }
		  .overlay ul li a {
			display: block;
			position: relative;
			color: #FFF;
			text-decoration: none;
			overflow: hidden;
		  }
		  .overlay ul li a:hover:after,
		  .overlay ul li a:focus:after,
		  .overlay ul li a:active:after {
			width: 100%;
		  }
		  .overlay ul li a:after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 50%;
			width: 0%;
			-webkit-transform: translateX(-50%);
			transform: translateX(-50%);
			height: 1px;
			background: #FFF;
			-webkit-transition: .35s;
			transition: .35s;
		  }
		  @-webkit-keyframes fadeInTop {
			0% {
			  opacity: 0;
			  bottom: 20%;
			}
			100% {
			  opacity: 1;
			  bottom: 0;
			}
		  }
		  @keyframes fadeInTop {
			0% {
			  opacity: 0;
			  bottom: 20%;
			}
			100% {
			  opacity: 1;
			  bottom: 0;
			}
		  }
		  body {
			height: 1500px;
		  }
		  
		}


		/*--------------------------------------------------------------------------------------------------------*/
		
		/*-------------------------------------------------Stock Market Code css-------------------------------------------------------*/
		
		.tradingview-widget-container {
			padding-top: 100px;
		}
		
		.tv-embed-widget-wrapper__header js-embed-widget-head {
			visibility: hidden;
		}
		
		
		.sponsors {
		  padding-top: 200px;
		  padding-bottom: 200px;
		  overflow: hidden;
		  position: relative;
		  width: 100%;
		  background: linear-gradient(rgba(21, 22, 29, .9), rgba(21, 22, 29, .9)), url(http://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/black-and-white-wallpaper-13.jpg);
		  background-attachment: fixed;
		  background-size: cover;
		  -moz-background-size: cover;
		  -webkit-background-size: cover;
		  background-repeat: no-repeat;
		  background-position: top center;
		}
		
		.sponsors1 {
		  padding-top: 200px;
		  padding-bottom: 200px;
		  overflow: hidden;
		  position: relative;
		  width: 100%;
		  background: linear-gradient(rgba(21, 22, 29, .9), rgba(21, 22, 29, .9)), url(
		  https://wallpapercave.com/wp/wp2128226.jpg);
		  background-attachment: fixed;
		  background-size: cover;
		  -moz-background-size: cover;
		  -webkit-background-size: cover;
		  background-repeat: no-repeat;
		  background-position: top center;
		}
		
		.sponsors2 {
		  padding-top: 200px;
		  padding-bottom: 200px;
		  overflow: hidden;
		  position: relative;
		  width: 100%;
		  background: linear-gradient(rgba(21, 22, 29, .9), rgba(21, 22, 29, .9)), url(https://wallpaperstudio10.com/static/wpdb/wallpapers/1920x1080/175031.jpg);
		  background-attachment: fixed;
		  background-size: cover;
		  -moz-background-size: cover;
		  -webkit-background-size: cover;
		  background-repeat: no-repeat;
		  background-position: top center;
		}
		
		.sponsors3 {
		  padding-top: 200px;
		  padding-bottom: 200px;
		  overflow: hidden;
		  position: relative;
		  width: 100%;
		  background: linear-gradient(rgba(21, 22, 29, .9), rgba(21, 22, 29, .9)), url(
		  https://www.pixelstalk.net/wp-content/uploads/2016/03/Banknote-cash-euro-euros-money-wallpaper.jpg);
		  background-attachment: fixed;
		  background-size: cover;
		  -moz-background-size: cover;
		  -webkit-background-size: cover;
		  background-repeat: no-repeat;
		  background-position: top center;
		}

		.sponsors h2 {
		  font-family: 'Oswald', sans-serif;
		  font-size: 30px;
		  letter-spacing: 10px;
		  text-align: center;
		  color: white;
		  font-weight: 400;
		  text-transform: uppercase;
		}
		
		.sponsors1 h2 {
		  font-family: 'Oswald', sans-serif;
		  font-size: 30px;
		  letter-spacing: 10px;
		  text-align: center;
		  color: white;
		  font-weight: 400;
		  text-transform: uppercase;
		}
		
		.sponsors2 h2 {
		  font-family: 'Oswald', sans-serif;
		  font-size: 30px;
		  letter-spacing: 10px;
		  text-align: center;
		  color: white;
		  font-weight: 400;
		  text-transform: uppercase;
		}
		
		.sponsors3 h2 {
		  font-family: 'Oswald', sans-serif;
		  font-size: 30px;
		  letter-spacing: 10px;
		  text-align: center;
		  color: white;
		  font-weight: 400;
		  text-transform: uppercase;
		}

		.hideme {
		  opacity: 0;
		}
		
		/*--------------------------------------------------------------------------------------------------------*/
		
		/*-------------------------------------------------FOOTER-------------------------------------------------------*/
		
		
		.alpha-vantage {
			height: 50px;
			width: 200px;
		}
		
		.footer-distributed{
			background-color: rgba(11, 12, 19, 1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
			box-sizing: border-box;
			width: 100%;
			font: bold 16px sans-serif;
			text-align: left;
			padding: 50px 60px 40px;
			overflow: hidden;
		}

		/* Footer left */

		.footer-distributed .footer-left{
			float: left;
		}

		/* The company logo */

		.footer-distributed h3{
			color:  #ffffff;
			font: normal 36px 'Cookie', cursive;
			margin: 0 0 10px;
		}

		.footer-distributed h3 span{
			color:  #5383d3;
		}

		/* Footer links */

		.footer-distributed .footer-links{
			color:  #ffffff;
			margin: 0 0 10px;
			padding: 0;
		}

		.footer-distributed .footer-links a{
			display:inline-block;
			line-height: 1.8;
			text-decoration: none;
			color:  inherit;
		}

		.footer-distributed .footer-company-name{
			color:  #8f9296;
			font-size: 14px;
			font-weight: normal;
			margin: 0;
		}

		/* Footer social icons */

		.footer-distributed .footer-icons{
			margin-top: 40px;
		}

		.footer-distributed .footer-icons a{
			display: inline-block;
			width: 35px;
			height: 35px;
			cursor: pointer;
			background-color:  #33383b;
			border-radius: 2px;

			font-size: 20px;
			color: #ffffff;
			text-align: center;
			line-height: 35px;

			margin-right: 3px;
			margin-bottom: 5px;
		}

		/* Footer Right */

		.footer-distributed .footer-right{
			float: right;
		}

		.footer-distributed .footer-right p{
			display: inline-block;
			vertical-align: top;
			margin: 15px 42px 0 0;
			color: #ffffff;
		}

		/* The contact form */

		.footer-distributed form{
			display: inline-block;
		}

		.footer-distributed form input,
		.footer-distributed form textarea{
			display: block;
			border-radius: 3px;
			box-sizing: border-box;
			background-color:  #1f2022;
			box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
			border: none;
			resize: none;

			font: inherit;
			font-size: 14px;
			font-weight: normal;
			color:  #d1d2d2;

			width: 400px;
			padding: 18px;
		}

		.footer-distributed ::-webkit-input-placeholder {
			color:  #5c666b;
		}

		.footer-distributed ::-moz-placeholder {
			color:  #5c666b;
			opacity: 1;
		}

		.footer-distributed :-ms-input-placeholder{
			color:  #5c666b;
		}


		.footer-distributed form input{
			height: 55px;
			margin-bottom: 15px;
		}

		.footer-distributed form textarea{
			height: 100px;
			margin-bottom: 20px;
		}

		.footer-distributed form button{
			border-radius: 3px;
			background-color:  #33383b;
			color: #ffffff;
			border: 0;
			padding: 15px 50px;
			font-weight: bold;
			float: right;
		}

		/* If you don't want the footer to be responsive, remove these media queries */

		@media (max-width: 1000px) {

			.footer-distributed {
				font: bold 14px sans-serif;
			}

			.footer-distributed .footer-company-name{
				font-size: 12px;
			}

			.footer-distributed form input,
			.footer-distributed form textarea{
				width: 250px;
			}

			.footer-distributed form button{
				padding: 10px 35px;
			}

		}

		@media (max-width: 800px) {

			.footer-distributed{
				padding: 30px;
			}

			.footer-distributed .footer-left,
			.footer-distributed .footer-right{
				float: none;
				max-width: 300px;
				margin: 0 auto;
			}

			.footer-distributed .footer-left{
				margin-bottom: 40px;
			}

			.footer-distributed form{
				margin-top: 30px;
			}

			.footer-distributed form{
				display: block;
			}

			.footer-distributed form button{
				float: none;
			}
		}


		/*-------------------------------------------------FOOTER-------------------------------------------------------*/		
		

		
		</style>
		
		
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript">
		//scroll to top on refresh//


			  	window.onbeforeunload = function() {
			  window.scrollTo(0, 0);
			}

			jQuery(document).ready(function($) {

			  $(window).load(function() {
				$('.loading').delay(2000).fadeOut('slow', function() {
				  $(this).remove();
				});
				setTimeout(function() {
				  $('.landing').addClass('loaded');
				}, 2000);
				setTimeout(function() {
				  $('body').addClass('loaded');
				}, 2000);

			  });

			  window.addEventListener('load', function() {

				var one = document.querySelector('.one');
				var two = document.querySelector('.two');
				var three = document.querySelector('.three');
				delay = 2500;

				setTimeout(function() {
				  $('.content-1').addClass('loaded');
				}, 2000);

				var animation = function() {
				  setTimeout(function() {
					one.style.top = '50%';
				  }, delay);
				  setTimeout(function() {
					one.style.top = '100%';
				  }, delay * 5);

				  setTimeout(function() {
					two.style.top = '50%';
				  }, delay * 6);
				  setTimeout(function() {
					two.style.top = '100%';
				  }, delay * 11);

				  setTimeout(function() {
					three.style.top = '50%';
				  }, delay * 12);
				  setTimeout(function() {
					three.style.top = '100%';
				  }, delay * 17);
				};
				animation();
				setInterval(animation, delay * 18);
			  });

			  window.onscroll = function() {
				if ($(this).scrollTop() > 1) {
				  $('header').addClass("resize");
				} else {
				  $('header').removeClass("resize");
				}
			  };

			  $(window).scroll(function() {
				$('.hideme').each(function(i) {
				  var bottom_of_object = $(this).offset().top + $(this).outerHeight();
				  var bottom_of_window = $(window).scrollTop() + $(window).height();
				  if (bottom_of_window > bottom_of_object) {
					$(this).animate({
					  'opacity': '1'
					}, 1250);
				  }
				});
			  });

			  $(".mouseScroll").click(function() {
				$('html, body').animate({
				  scrollTop: $(".about").offset().top - 150
				}, 800);
			  });

			  window.onload = function() {
				$('.button_container').click(function() {
				  $('.button_container').toggleClass('active');
				  $('.overlay').toggleClass('open');
				  $('body').toggleClass('active');
				});
			  }

			});
			

			  
			
		</script>
		
	</head>
	
	
	<body>
	
	<!--------------------------------------------------------Preloader----------------------------------------------------------->
	 
		<div class="loading">
			<div class="svg-wrapper">
				<svg height="150" width="150" xmlns="http://www.w3.org/2000/svg">
					<rect class="animate" height="150" width="150" />
				</svg>
			<div class="text">
				<span class="logo">ENIGMA</span>
				<span class="motto">we trade stocks.</span>
			</div>
			</div>
		</div>

			<!-----------------------------------SVG animation---------------------------------->
	  
			  <script>
				var p = document.querySelector('.animate'),
				  offset = 600;
				var offsetMe = function() {
				  if (offset < 0) {
					offset = 600;
				  }
				  p.style.strokeDashoffset = offset;
				  offset = offset - 5;
				  requestAnimationFrame(offsetMe);
				}
				offsetMe();
			  </script>
	  
			<!-----------------------------------SVG animation---------------------------------->
	  
	<!--------------------------------------------------------Preloader----------------------------------------------------------->
	  
	  
	<!-----------------------------------------------------Desktop Navigation------------------------------------------------------>
	  
		  <span class="desktop">
			<header>
			  <span id="logo">ENIGMA</span>
			  <nav>
				<a href="Home.php">Home</a>
				<a href="#">Stocks</a>
				<a href="https://fathomless-anchorage-36044.herokuapp.com/">Forums</a>
				<a href="Chat.php">Chat</a>
				<a href="logout.php">Logout</a>
			  </nav>
			</header>
		  </span>
		  
		
		  
	<!-----------------------------------------------------Desktop Navigation------------------------------------------------------>

	<!-----------------------------------------------------Mobile Navigation------------------------------------------------------->
		  
		  <span class="mobile">
			<header>
			  <span id="logo">ENIGMA</span>
			  <div class="button_container">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			  </div>
			</header>

			<div class="overlay">
			  <nav>
				<ul>
				  <li><a href="Home.php">Home</a></li>
				  <li><a href="#">Stocks</a></li>
				  <li><a href="https://fathomless-anchorage-36044.herokuapp.com/">Forums</a></li>
				  <li><a href="Chat.php">Chat</a></li>
				  <li><a href="logout.php">Logout</a></li>
				</ul>
			  </nav>
			</div>
		  </span>
		  
	<!-----------------------------------------------------Mobile Navigation------------------------------------------------------->
		
	<!-----------------------------------------------------Ticker------------------------------------------------------->
	
	<!-- TradingView Widget BEGIN -->
	
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
		  {
		  "symbols": [
			{
			  "title": "S&P 500",
			  "proName": "INDEX:SPX"
			},
			{
			  "title": "Nasdaq 100",
			  "proName": "INDEX:IUXX"
			},
			{
			  "title": "EUR/USD",
			  "proName": "FX_IDC:EURUSD"
			},
			{
			  "title": "BTC/USD",
			  "proName": "BITFINEX:BTCUSD"
			},
			{
			  "title": "ETH/USD",
			  "proName": "BITFINEX:ETHUSD"
			}
		  ],
		  "locale": "en",
			  "theme":"Dark"
		 }
		  </script>
		</div>
		
	<!-- TradingView Widget END -->
	
	<!-----------------------------------------------------Ticker------------------------------------------------------>
    
	<!-----------------------------------------------------Stock Chart------------------------------------------------------->
	
	<!-- TradingView Widget BEGIN -->
	
		<div class="tradingview-widget-container1">
		  <div id="tradingview_a8b4e"></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
		  <script type="text/javascript">
		  new TradingView.widget(
		  {
		  "height": "100%",
		  "width": "100%",
		  "symbol": "NASDAQ:AAPL",
		  "interval": "D",
		  "timezone": "Etc/UTC",
		  "theme": "Light",
		  "style": "1",
		  "locale": "en",
		  "toolbar_bg": "#f1f3f6",
		  "enable_publishing": false,
		  "hide_side_toolbar": false,
		  "allow_symbol_change": true,
		  "details": true,
		  "hotlist": true,
		  "calendar": true,
		  "news": [
			"stocktwits",
			"headlines"
		  ],
		  "show_popup_button": true,
		  "popup_width": "1000",
		  "popup_height": "650",
		  "container_id": "tradingview_a8b4e"
		}
		  );
		  </script>
		</div>
	
	<!-- TradingView Widget END --> 

	<!-----------------------------------------------------Stock Chart------------------------------------------------------>
	
	<!--------------------------------------------------Market Watcher------------------------------------------------------->
 
		  <div class="sponsors1">
			<div class="hideme">
			  <h2>Market Watcher</h2>
			</div>
		  </div>

		  
	<!-- TradingView Widget BEGIN -->

			  <div class="tradingview-widget-container__widget2"></div>

			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
			  {
			  "width": "100%",
			  "height": "100%",
			  "defaultColumn": "overview",
			  "defaultScreen": "most_capitalized",
			  "market": "india",
			  "showToolbar": true,
			  "locale": "en"
			}
			  </script>

	<!-- TradingView Widget END -->
	
	<!--------------------------------------------------Market Watcher------------------------------------------------------->

	<!--------------------------------------------------Cryptocurrency section------------------------------------------------------->
 
		  <div class="sponsors2">
			<div class="hideme">
			  <h2>Cryptocurrency Market</h2>
			</div>
		  </div>

	  
	  <!-- TradingView Widget BEGIN -->
  
			  <div class="tradingview-widget-container__widget"></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
			  {
			  "width": "100%",
			  "height": "100%",
			  "defaultColumn": "overview",
			  "screener_type": "crypto_mkt",
			  "displayCurrency": "USD",
			  "locale": "en"
			}
			  </script>
	
	<!-- TradingView Widget END -->   
	
	<!--------------------------------------------------Cryptocurrency section------------------------------------------------------->
	
	<!--------------------------------------------------Currency Section------------------------------------------------------->
 
		  <div class="sponsors3">
			<div class="hideme">
			  <h2>Currency</h2>
			</div>
		  </div>
	
	<!-- TradingView Widget BEGIN -->

		  <div class="tradingview-widget-container__widget"></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
		  {
		  "currencies": [
			"EUR",
			"USD",
			"JPY",
			"GBP",
			"AUD",
			"CAD",
			"NZD",
			"CNY",
			"INR"
		  ],
		  "width": "100%",
		  "height": 700,
		  "locale": "en"
		}
		  </script>
  
	<!-- TradingView Widget END --> 

	<!--------------------------------------------------Currency section------------------------------------------------------->
    
	<!-------------------------------------------------- FOOTER ------------------------------------------------------->
	  
		<!--footer>
			<div class="footer-social-icons">
				<!-- Add font awesome icons 
				&copy 2017 - ENIGMA Organisation
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
			</div>
		</footer-->
		
		  <footer class="footer-distributed">

			<div class="footer-left">

				<img class="alpha-vantage" src="https://digit.hbs.org/wp-content/uploads/sites/2/2018/02/Alpha-Vantage-Logo-Medium-size-1000x200.png"/>

				<p class="footer-company-name"><br><br>Enigma Organization &copy; 2018</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="stockcontacts.php" method="post">

					<input type="email" name="email" id="email" placeholder="Email" required>
					<textarea name="message" id="message" placeholder="Message" required></textarea>
					<button type="submit">Send</button>

				</form>

			</div>

		  </footer>
		
		
		
	  <!-------------------------------------------------- FOOTER ------------------------------------------------------->
	  
	
	
	
	</body>
	
	
	
</html>

	<?php
	}
	else{
		echo "<script>alert('please signin to access the site');</script>";
		echo "<script type='text/javascript'>window.top.location='index.html';</script>";
		
	}
	?>