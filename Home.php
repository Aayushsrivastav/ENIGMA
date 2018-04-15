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
		  nav a:nth-child(1) {
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
			min-width: 100%;
			max-width: 100%;
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
			min-width: 100%;
			max-width: 100%;
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
		
		
		/*-------------------------------------------------MAIN BODY-------------------------------------------------------*/

		.wrapper {
		  width: 100%;
		  height: 100vh;
		  position: relative;
		  overflow: hidden;
		}

		.landing {
		  width: 100%;
		  height: 100%;
		  transform: scale(1.25);
		  background-image: linear-gradient(rgba(21, 22, 29, .9), rgba(21, 22, 29, .9)), url(http://harvardmagazine.com/sites/default/files/img/article/0215/img_HS_MA15_p08_02.jpg);
		  background-position: center center;
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: cover;
		  transition: all 1.5s ease;
		}

		.landing.loaded {
		  transform: scale(1.0);
		}

		.content-1 {
		  text-align: center;
		  height: 100px;
		  position: absolute;
		  top: 45%;
		  left: 50%;
		  transform: translateX(-50%) translateY(-50%);
		  border-bottom: 1px solid white;
		  overflow: hidden;
		  width: 0;
		  transition: 1s ease;
		}

		.content-1.loaded {
		  width: 800px;
		}

		.one,
		.two,
		.three {
		  color: white;
		  font-size: 35px;
		  position: absolute;
		  text-align: center;
		  top: 100%;
		  left: 50%;
		  transform: translateX(-50%);
		  transition: all .75s ease;
		  font-family: 'Cinzel';
		}

		.mouseScroll {
		  display: block;
		  width: 26px;
		  height: 42px;
		  border-radius: 20px;
		  border: 2px solid #fff;
		  text-align: center;
		  position: absolute;
		  left: 0px;
		  right: 0px;
		  bottom: 20px;
		  margin: 0 auto;
		  transition: opacity 0.5s;
		}

		.mouseScroll::before {
		  content: '';
		  display: inline-block;
		  width: 4px;
		  height: 8px;
		  position: relative;
		  border-radius: 4px;
		  background: #fff;
		  -webkit-animation: scrollWheel 2s infinite;
		  animation-duration: .7s;
		  animation-iteration-count: infinite;
		  box-sizing: border-box;
		}

		.mouseScroll:hover {
		  cursor: pointer;
		  opacity: .5;
		}

		@keyframes scrollWheel {
		  from {
			top: 0px;
		  }
		  to {
			top: 6px;
		  }
		}

		.about {
		  width: 100%;
		  padding-bottom: 100px;
		  text-align: center;
		  color: white;
		}

		.about h1 {
		  font-family: 'Lato', serif, sans-serif;
		  font-weight: 100;
		  font-size: 40px;
		  margin-top: 100px;
		}

		#mission {
		  margin-top: 80px;
		  font-family: 'Noto Serif', serif, sans-serif;
		  font-style: italic;
		  font-size: 20px;
		  color: #999;
		  width: 70%;
		  margin-left: 15%;
		  padding-bottom: 30px;
		}

		:root {
		  --cube-height: 60px;
		}

		.container {
		  z-index: 1;
		  position: absolute;
		  margin-right: auto;
		  margin-left: auto;
		  right: 0;
		  left: 0;
		  width: 260px;
		  height: var(--cube-height);
		}

		.cube {
		  width: 250px;
		  height: var(--cube-height);
		  -webkit-transition: all 300ms ease-out;
		  -moz-transition: all 300ms ease-out;
		  -o-transition: all 300ms ease-out;
		  transition: all 300ms ease-out;
		  -webkit-transform-style: preserve-3d;
		  -moz-transform-style: preserve-3d;
		  -o-transform-style: preserve-3d;
		  -ms-transform-style: preserve-3d;
		  transform-style: preserve-3d;
		}

		.default-state,
		.active-state {
		  height: var(--cube-height);
		}

		.default-state {
		  border: 1px solid #fdad59;
		  -webkit-transform: translateZ(calc((var(--cube-height)/2)));
		  -moz-transform: translateZ(calc((var(--cube-height)/2)));
		  -o-transform: translateZ(calc((var(--cube-height)/2)));
		  -ms-transform: translateZ(calc((var(--cube-height)/2)));
		  transform: translateZ(calc((var(--cube-height)/2)));
		}

		.active-state {
		  color: white;
		  -webkit-transform: rotateX(90deg) translateZ(calc((var(--cube-height)*1.5)));
		  -moz-transform: rotateX(90deg) translateZ(calc((var(--cube-height)*1.5)));
		  -o-transform: rotateX(90deg) translateZ(calc((var(--cube-height)*1.5)));
		  -ms-transform: rotateX(90deg) translateZ(calc((var(--cube-height)*1.5)));
		  transform: rotateX(90deg) translateZ(calc((var(--cube-height)*1.5)));
		}

		.container:hover + .cube {
		  -webkit-transform: rotateX(-90deg);
		  -moz-transform: rotateX(-90deg);
		  -o-transform: rotateX(-90deg);
		  -ms-transform: rotateX(-90deg);
		  transform: rotateX(-90deg);
		}

		.cube {
		  text-align: center;
		  margin: 0 auto;
		}

		.default-state,
		.active-state {
		  font-size: 20px;
		  text-transform: uppercase;
		  font-family: 'Lato', sans-serif;
		  font-weight: 300;
		  color: #be9d7d;
		  line-height: var(--cube-height);
		}

		.active-state {
		  background: #fdad59;
		  color: white;
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

		.sponsors h2 {
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

		
		
		
		/*-------------------------------------------------MAIN BODY-------------------------------------------------------*/
		
		
		
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
				<a href="#">Home</a>
				<a href="Stocks.php">Stocks</a>
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
				  <li><a href="#">Home</a></li>
				  <li><a href="Stocks.php">Stocks</a></li>
				  <li><a href="https://fathomless-anchorage-36044.herokuapp.com/">Forums</a></li>
				  <li><a href="Chat.php">Chat</a></li>
				  <li><a href="logout.php">Logout</a></li>
				</ul>
			  </nav>
			</div>
		  </span>
		  
	  <!-----------------------------------------------------Mobile Navigation------------------------------------------------------->
  
	  <!---------------------------------------------------------Homepage------------------------------------------------------------>
	  
		  <div class="wrapper">
			<div class="landing"></div>
		  </div>
		  
	  <!---------------------------------------------------------Homepage------------------------------------------------------------>

	  <!---------------------------------------------------Intro text scroll--------------------------------------------------------->
	  
		  <div class="content-1">
			<span class="one">We Trade Stocks.</span>
			<span class="two">We Give Latest News.</span>
			<span class="three">We are ENIGMA.</span>
		  </div>
		  
	  <!---------------------------------------------------Intro text scroll--------------------------------------------------------->

	  <!--------------------Mouse scroller---------------------->
  
		  <span class="mouseScroll"></span>
		  
	  <!--------------------Mouse scroller---------------------->

	  <!----------------------------------------------------About section-------------------------------------------------------->
 
		  <div class="about">

			<div class="hideme">
			  <h1>Engima Investors</h1>
			</div>

			<div class="hideme">
			  <div id="mission">
				<p>Enigma is committed to provide its users the latest news in the stock market. At Stock Market Club we give investors the experience and tools necessary for being responsible and successful with their investments. When you follow your true calling, greatness is born. Our true calling is to help great companies do great things.</p>
			  </div>
			</div>

			
      <!----------------------------Contact box---------------------------->
	
			<div class="hideme">
			  <div class="container"></div>
			  <div class="cube">
				<div class="default-state">
				  <span>Contact  Us</span>
				</div>
				<div class="active-state">
				  <span>Gaurav@gmail.com</span>
				</div>
			  </div>
			</div>
		  </div>
		  
      <!----------------------------Contact box---------------------------->

	  
	  <!----------------------------------------------------About section-------------------------------------------------------->

      <!--------------------------------------------------Sponsors section------------------------------------------------------->
 
		  <div class="sponsors">
			<div class="hideme">
			  <h2>An investment in knowledge pays the best interest</h2>
			</div>
		  </div>

	  <!--------------------------------------------------Sponsors section------------------------------------------------------->
		  
		  
	  <!-------------Social section
	  
			  <div class="social">
				<span class="hideme">
				  <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
				</span>
			  </div>
			  
	  ------------------->


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

				<form action="contacts.php" method="post">

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
		echo "<script>alert('please signin to access this site');</script>";
		echo "<script type='text/javascript'>window.top.location='index.html';</script>";
		
	}
	?>