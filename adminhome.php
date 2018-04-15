<?php
	session_start();
	 $dbhost = 'mysql.hostinger.in';
	 $dbuser = 'u274103504_harsh';
     $dbpass = 'Infinity@9833';
	 $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	 if(!$conn)
	 {
	 die('Could not connect: '.mysql_error());
	 }
	 $db_select = mysqli_select_db($conn,'u274103504_stock');
	 if (!$db_select) {
	    die("Database selection failed: ".mysqli_error());
	}

	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row = $result->fetch_assoc();


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
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		 


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

		.text1 {
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
		
		/*---------------------------------- News card css ------------------------------------*/


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
			height: 3000px;
		  }
		  
		}


		/*--------------------------------------------------------------------------------------------------------*/
		
		.hideme {
		  opacity: 0;
		}
		
		.user-heading {
			color: #fdad59;
			padding-top: 150px;
			padding-left: 200px;
			letter-spacing: 2px;
			font-size: 22px;
			font-family: 'Cinzel';
			
		}
		
		.user-heading1 {
			color: #fdad59;
			padding-top: 250px;
			padding-left: 200px;
			letter-spacing: 2px;
			font-size: 22px;
			font-family: 'Cinzel';
			
		}
		
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
			<div class="text1">
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
				<a href="userquery.php">UserQuery</a>
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
				  <li><a href="userquery.php">UserQuery</a></li>
				  <li><a href="logout.php">Logout</a></li>
				</ul>
			  </nav>
			</div>
		  </span>
		  
	  <!-----------------------------------------------------Mobile Navigation------------------------------------------------------->
	
		
	
	  <!----------------------------Online user--------------------------------->
		
			<div class="header55" >
				<div class="hideme">
				  <h2>Online user</h2>
				</div>
			</div>
		
			<div class="user-heading" >
				
					<h2>Online Users</h2>
				
			</div>
		
		
			<div class="container">
			
				<div class="row" style="margin-top:10%;">

					<?php 
							foreach($result as $row){ 
							if($row['role']=='user' && $row['status']=='online'){
					?>
			
			
				<div class="card col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" >
				<!--<img class="card-img-top" src="image/" alt="Card image" style="width:100%">-->
					<div class="card-body" style="width:100%">
					<h3 class="card-title"><?php echo $row['name']; ?></h3>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#my<?php echo $row['id']; ?>">View Profile</button>
					</div>
				</div>

				<div class="container">


					
					<!---------------------- The Modal ---------------------------->
		  
					<div class="modal fade" id="my<?php echo $row['id']; ?>">
					<div class="modal-dialog">
					<div class="modal-content">


					<!--------------------- Modal Header --------------------------->
			  
						  <div class="modal-header">
							  <h2><b>
								  Details
								  </b></h2>
						  </div>


					<!--------------------- Modal body --------------------------->
					  
						  <div class="modal-body">

								<label><b>Name:</b></label><p><?php echo $row['name'] ?></p>
								<label><b>Email:</b></label><p><?php echo $row['email'] ?></p>

						  </div>


					<!-------------------- Modal footer -------------------------->
			 
						  <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						  </div>

					</div>
					</div>
					</div>
		  
				</div>

				<br>


					<?php }} ?>

				</div>
	
			</div>
		
	<!------------------------------------online user block end!------------------------------>
		
	<!----------------------------Offline user--------------------------------->
		
			<div class="user-heading1" >
				
					<h2>Offline Users</h2>
				
			</div>
		
		
		
			<div class="container">
				<div class="row" style="margin-top:10%;">

					<?php 
							foreach($result as $row){ 
							if($row['role']=='user' && $row['status']=='offline'){
					?>
			
			
				<div class="card col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" >
				<!--<img class="card-img-top" src="image/" alt="Card image" style="width:100%">-->
		    
					<div class="card-body" style="width:100%">
					<h3 class="card-title"><?php echo $row['name']; ?></h3>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#my<?php echo $row['id']; ?>">View Profile</button>
					</div>
				</div>

				<div class="container">


				<!------------------------- The Modal ------------------------------>
		  
					<div class="modal fade" id="my<?php echo $row['id']; ?>">
						<div class="modal-dialog">
						<div class="modal-content">

					<!--
								   Modal Header 
								  <div class="modal-header">
									<img src="image//**/" style="width: 200px; height: 230px;" alt="image">
								  </div>
					-->

				<!-------------------------- Modal body ---------------------------->
			  
						  <div class="modal-body">

								<label><b>Name:</b></label><p><?php echo $row['name'] ?></p>
								<label><b>Email:</b></label><p><?php echo $row['email'] ?></p>

						  </div>


				<!------------------------- Modal footer ---------------------------->
			  
						  <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						  </div>

						</div>
						</div>
					</div>
		 
				</div>

				<br>


				<?php }} ?>

				</div>
	
			</div>
		
	<!------------------------------------offline user block end!------------------------------>
	
	
	</body>
	
	
	
</html>
	
	<?php
	}
	else{
		echo "<script>alert('please signin to access this site');</script>";
		echo "<script type='text/javascript'>window.top.location='index.html';</script>";
		
	}
	?>