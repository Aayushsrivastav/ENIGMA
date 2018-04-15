<!DOCTYPE html>
<html lang="en" class="no-js">
	
	
	<head>
		
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sign in</title>
		
		<!-------------------------------------------- All CSS Hover up files ------------------------------------->
		
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
		<!-------------------------------------------- All CSS Hover up files ------------------------------------->
		
		<style type="text/css">
		
		/*-------------------------------------------------- SIGN IN CSS-----------------------------------------------------*/
		
		.box {
		   position: relative;
		   top: 0;
		   opacity: 1;
		   float: left;
		   padding: 60px 50px 40px 50px;
		   width: 100%;
		   background: orange;
		   border-radius: 10px;
		   transform: scale(1);
		   -webkit-transform: scale(1);
		   -ms-transform: scale(1);
		   z-index: 5;
		}

		.box.back {
		   transform: scale(.95);
		   -webkit-transform: scale(.95);
		   -ms-transform: scale(.95);
		   top: -20px;
		   opacity: .8;
		   z-index: -1;
		}

		.overbox .title {
		   color: #fff;
		}

		.overbox .title:before {
		   background: #fff;
		}

		.title {
		   width: 100%;
		   float: left;
		   line-height: 46px;
		   font-size: 34px;
		   font-weight: 700;
		   letter-spacing: 2px;
		   color: #ED2553;
		   position: relative;
		}

		.title:before {
		   content: "";
		   width: 5px;
		   height: 100%;
		   position: absolute;
		   top: 0;
		   left: -50px;
		   background: #ED2553;
		}

		.input,
		.input label,
		.input input,
		.input .spin,
		.button,
		.button button .button.login button i.fa,
		.material-button .shape:before,
		.material-button .shape:after,
		.button.login button {
		   transition: 300ms cubic-bezier(.4, 0, .2, 1);
		   -webkit-transition: 300ms cubic-bezier(.4, 0, .2, 1);
		   -ms-transition: 300ms cubic-bezier(.4, 0, .2, 1);
		}

		.material-button,
		.alt-2,
		.material-button .shape,
		.alt-2 .shape,
		.box {
		   transition: 400ms cubic-bezier(.4, 0, .2, 1);
		   -webkit-transition: 400ms cubic-bezier(.4, 0, .2, 1);
		   -ms-transition: 400ms cubic-bezier(.4, 0, .2, 1);
		}

		.input,
		.input label,
		.input input,
		.input .spin,
		.button,
		.button button {
		   width: 100%;
		   float: left;
		}

		.input,
		.button {
		   margin-top: 30px;
		   height: 70px;
		}

		.input,
		.input input,
		.button,
		.button button {
		   position: relative;
		}

		.input input {
		   height: 60px;
		   top: 10px;
		   border: none;
		   background: transparent;
		}

		.input input,
		.input label,
		.button button {
		   font-family: 'Roboto', sans-serif;
		   font-size: 24px;
		   color: rgba(0, 0, 0, 0.8);
		   font-weight: 300;
		}

		.input:before,
		.input .spin {
		   width: 100%;
		   height: 1px;
		   position: absolute;
		   bottom: 0;
		   left: 0;
		}

		.input:before {
		   content: "";
		   background: rgba(0, 0, 0, 0.1);
		   z-index: 3;
		}

		.input .spin {
		   background: #ED2553;
		   z-index: 4;
		   width: 0;
		}

		.overbox .input .spin {
		   background: rgba(255, 255, 255, 1);
		}

		.overbox .input:before {
		   background: rgba(255, 255, 255, 0.5);
		}

		.input label {
		   position: absolute;
		   top: 10px;
		   left: 0;
		   z-index: 2;
		   cursor: pointer;
		   line-height: 60px;
		}

		.button.login {
		   width: 60%;
		   left: 20%;
		}

		.button.login button,
		.button button {
		   width: 100%;
		   line-height: 64px;
		   left: 0%;
		   background-color: transparent;
		   border: 3px solid rgba(0, 0, 0, 0.1);
		   font-weight: 900;
		   font-size: 18px;
		   color: rgba(0, 0, 0, 0.2);
		}

		.button.login {
		   margin-top: 30px;
		}

		.button {
		   margin-top: 20px;
		}

		.button button {
		   background-color: #fff;
		   color: #ED2553;
		   border: none;
		}

		.button.login button.active {
		   border: 3px solid transparent;
		   color: #fff !important;
		}

		.button.login button.active span {
		   opacity: 0;
		   transform: scale(0);
		   -webkit-transform: scale(0);
		   -ms-transform: scale(0);
		}

		.button.login button.active i.fa {
		   opacity: 1;
		   transform: scale(1) rotate(-0deg);
		   -webkit-transform: scale(1) rotate(-0deg);
		   -ms-transform: scale(1) rotate(-0deg);
		}

		.button.login button i.fa {
		   width: 100%;
		   height: 100%;
		   position: absolute;
		   top: 0;
		   left: 0;
		   line-height: 60px;
		   transform: scale(0) rotate(-45deg);
		   -webkit-transform: scale(0) rotate(-45deg);
		   -ms-transform: scale(0) rotate(-45deg);
		}

		.button.login button:hover {
		   color: #ED2553;
		   border-color: #ED2553;
		}

		.button {
		   margin: 40px 0;
		   overflow: hidden;
		   z-index: 2;
		}

		.button button {
		   cursor: pointer;
		   position: relative;
		   z-index: 2;
		}

		.pass-forgot {
		   width: 100%;
		   float: left;
		   text-align: center;
		   color: rgba(0, 0, 0, 0.4);
		   font-size: 18px;
		}

		.click-efect {
		   position: absolute;
		   top: 0;
		   left: 0;
		   background: #ED2553;
		   border-radius: 50%;
		}

		.overbox {
		   width: 100%;
		   height: 100%;
		   position: absolute;
		   top: 0;
		   left: 0;
		   overflow: inherit;
		   border-radius: 10px;
		   padding: 60px 50px 40px 50px;
		}

		.overbox .title,
		.overbox .button,
		.overbox .input {
		   z-index: 111;
		   position: relative;
		   color: #fff !important;
		   display: none;
		}

		.overbox .title {
		   width: 80%;
		}

		.overbox .input {
		   margin-top: 20px;
		}

		.overbox .input input,
		.overbox .input label {
		   color: #fff;
		}

		.overbox .material-button,
		.overbox .material-button .shape,
		.overbox .alt-2,
		.overbox .alt-2 .shape {
		   display: block;
		}

		.material-button,
		.alt-2 {
		   width: 140px;
		   height: 140px;
		   border-radius: 50%;
		   background: #ED2553;
		   position: absolute;
		   top: 40px;
		   right: -70px;
		   cursor: pointer;
		   z-index: 100;
		   transform: translate(0%, 0%);
		   -webkit-transform: translate(0%, 0%);
		   -ms-transform: translate(0%, 0%);
		}

		.material-button .shape,
		.alt-2 .shape {
		   position: absolute;
		   top: 0;
		   right: 0;
		   width: 100%;
		   height: 100%;
		}

		.material-button .shape:before,
		.alt-2 .shape:before,
		.material-button .shape:after,
		.alt-2 .shape:after {
		   content: "";
		   background: #fff;
		   position: absolute;
		   top: 50%;
		   left: 50%;
		   transform: translate(-50%, -50%) rotate(360deg);
		   -webkit-transform: translate(-50%, -50%) rotate(360deg);
		   -ms-transform: translate(-50%, -50%) rotate(360deg);
		}

		.material-button .shape:before,
		.alt-2 .shape:before {
		   width: 25px;
		   height: 4px;
		}

		.material-button .shape:after,
		.alt-2 .shape:after {
		   height: 25px;
		   width: 4px;
		}

		.material-button.active,
		.alt-2.active {
		   top: 50%;
		   right: 50%;
		   transform: translate(50%, -50%) rotate(0deg);
		   -webkit-transform: translate(50%, -50%) rotate(0deg);
		   -ms-transform: translate(50%, -50%) rotate(0deg);
		}



		.materialContainer {
		   width: 100%;
		   max-width: 460px;
		   position: fixed;
		   top: 50%;
		   left: 50%;
		   transform: translate(-50%, -50%);
		   -webkit-transform: translate(-50%, -50%);
		   -ms-transform: translate(-50%, -50%);
		   z-index: 100;
		}

		*,
		*:after,
		*::before {
		   -webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
		   box-sizing: border-box;
		   margin: 0;
		   padding: 0;
		   text-decoration: none;
		   list-style-type: none;
		   outline: none;
		}

		/*-------------------------------------------------- SIGN IN CSS-----------------------------------------------------*/

		</style>
		
		<!----------------------------------- Hover up file --------------------------------->
		
		<script src="js/modernizr.custom.js"></script>
		
		<!----------------------------------- Hover up file --------------------------------->
		
		<!------------------ Google analytics part not part of the project
		
		<script type="text/javascript">
				
				
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-7243260-2']);
				_gaq.push(['_trackPageview']);
				(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
				
				
		</script>
		
		Google analytics part not part of the project --------------------------------------->
		
		
		
		
	</head>
	
	<!----------------------------------------------- Sign up html form ------------------------------------------------>
	
	<body>
	
	<!----------------------------------------------- Sign up html form div container start ------------------------------------------------>
	
	<div class="materialContainer">

	   <!----------------------------------------------- Login Box ------------------------------------------------>

	   <div class="box">

		  <div class="title">Reset Password</div>
		   <form method="post" name="login" action="forpassubmit.php" onsubmit="return validateLoginForm()">
			  <div class="input">
				 <label for="Email">Email</label>
				 <input type="email" name="Email" id="Email">
				 <span class="spin"></span>
			  </div>

			  <div class="button login">
				 <button name="submit" type="submit"><span>GO</span> <i class="fa fa-check"></i></button>
			  </div>

			  <a href="index.html" class="pass-forgot">Get back</a>
		   </form>
	   </div>
	   
		
		
		
		<!--- javascript for the validation of LoginForm --->
		<script type="text/javascript">
			function validateLoginForm() {
				var x = document.forms["login"]["Email"].value;
				var atpos = x.indexOf("@");
    				var dotpos = x.lastIndexOf(".");
    
				if (x === undefined || x === null || x == "") {
					alert("email must be filled out");
					document.getElementById("Email").focus();
					return false;
				}
				
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				  	alert("Not a valid e-mail address");
					document.getElementById("Email").focus();
					return false;
			    	}
				
			}
		</script>
	   <!----------------------------------------------- Login Box ------------------------------------------------>

	</div>
	
	<!----------------------------------------------- Sign up html form div container end ------------------------------------------------>
	
	<!----------------------------------------------- Sign up form Javascript ------------------------------------------------>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">

			$(function() {

		   $(".input input").focus(function() {

			  $(this).parent(".input").each(function() {
				 $("label", this).css({
					"line-height": "18px",
					"font-size": "18px",
					"font-weight": "100",
					"top": "0px"
				 })
				 $(".spin", this).css({
					"width": "100%"
				 })
			  });
		   }).blur(function() {
			  $(".spin").css({
				 "width": "0px"
			  })
			  if ($(this).val() == "") {
				 $(this).parent(".input").each(function() {
					$("label", this).css({
					   "line-height": "60px",
					   "font-size": "24px",
					   "font-weight": "300",
					   "top": "10px"
					})
				 });

			  }
		   });

		   $(".button").click(function(e) {
			  var pX = e.pageX,
				 pY = e.pageY,
				 oX = parseInt($(this).offset().left),
				 oY = parseInt($(this).offset().top);

			  $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
			  $('.x-' + oX + '.y-' + oY + '').animate({
				 "width": "500px",
				 "height": "500px",
				 "top": "-250px",
				 "left": "-250px",

			  }, 500);
			  $("button", this).addClass('active');
		   })

		   $(".alt-2").click(function() {
			  if (!$(this).hasClass('material-button')) {
				 $(".shape").css({
					"width": "100%",
					"height": "100%",
					"transform": "rotate(0deg)"
				 })

				 setTimeout(function() {
					$(".overbox").css({
					   "overflow": "initial"
					})
				 }, 600)

				 $(this).animate({
					"width": "140px",
					"height": "140px"
				 }, 500, function() {
					$(".box").removeClass("back");

					$(this).removeClass('active')
				 });

				 $(".overbox .title").fadeOut(300);
				 $(".overbox .input").fadeOut(300);
				 $(".overbox .button").fadeOut(300);

				 $(".alt-2").addClass('material-buton');
			  }

		   })

		   $(".material-button").click(function() {

			  if ($(this).hasClass('material-button')) {
				 setTimeout(function() {
					$(".overbox").css({
					   "overflow": "hidden"
					})
					$(".box").addClass("back");
				 }, 200)
				 $(this).addClass('active').animate({
					"width": "700px",
					"height": "700px"
				 });

				 setTimeout(function() {
					$(".shape").css({
					   "width": "50%",
					   "height": "50%",
					   "transform": "rotate(45deg)"
					})

					$(".overbox .title").fadeIn(300);
					$(".overbox .input").fadeIn(300);
					$(".overbox .button").fadeIn(300);
				 }, 700)

				 $(this).removeClass('material-button');

			  }

			  if ($(".alt-2").hasClass('material-buton')) {
				 $(".alt-2").removeClass('material-buton');
				 $(".alt-2").addClass('material-button');
			  }

		   });

		});


	</script>
	
	<!----------------------------------------------- Sign up form Javascript ------------------------------------------------>
	
	</body>
	
	<!--------------------------------------------------- Sign up html form ------------------------------------------------>
	
	<!--------------------------------------------------- Hover file html code ------------------------------------------------>
	
	<body class="demo-1">
	
		<main>
		
			<div class="isolayer isolayer--scroll1 isolayer--shadow">
				
				<ul class="grid grid--effect-flip">
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/1.png" alt="01" />
							<span class="grid__title">Indices</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/2.png" alt="021" />
							<span class="grid__title">Bonds</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/3.png" alt="03" />
							<span class="grid__title">Money conversion</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/4.png" alt="042" />
							<span class="grid__title">charts</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/5.png" alt="011" />
							<span class="grid__title">buy | sell</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/6.png" alt="02" />
							<span class="grid__title">Cryptocurrecny</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/7.png" alt="031" />
							<span class="grid__title">Area</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/8.png" alt="04" />
							<span class="grid__title">Cosmin Capitanu</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/9.png" alt="012" />
							<span class="grid__title">Candle stick</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/10.png" alt="022" />
							<span class="grid__title">hollow candle</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/11.png" alt="032" />
							<span class="grid__title">kagi</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/12.png" alt="013" />
							<span class="grid__title">line</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/1.png" alt="01" />
							<span class="grid__title">Indices</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/2.png" alt="021" />
							<span class="grid__title">Bonds</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/3.png" alt="03" />
							<span class="grid__title">Money conversion</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/4.png" alt="042" />
							<span class="grid__title">charts</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/5.png" alt="011" />
							<span class="grid__title">buy | sell</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/6.png" alt="02" />
							<span class="grid__title">Cryptocurrecny</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/7.png" alt="031" />
							<span class="grid__title">Area</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/8.png" alt="04" />
							<span class="grid__title">Cosmin Capitanu</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/9.png" alt="012" />
							<span class="grid__title">Candle stick</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/10.png" alt="022" />
							<span class="grid__title">hollow candle</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/11.png" alt="032" />
							<span class="grid__title">kagi</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/12.png" alt="013" />
							<span class="grid__title">line</span>
						</a>
					</li>
                    <li class="grid__item">
						<a class="grid__link" href="https://dribbble.com/">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/1.png" alt="01" />
							<span class="grid__title">Indices</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/2.png" alt="021" />
							<span class="grid__title">Bonds</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/3.png" alt="03" />
							<span class="grid__title">Money conversion</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/4.png" alt="042" />
							<span class="grid__title">charts</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/5.png" alt="011" />
							<span class="grid__title">buy | sell</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/6.png" alt="02" />
							<span class="grid__title">Cryptocurrecny</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/7.png" alt="031" />
							<span class="grid__title">Area</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/8.png" alt="04" />
							<span class="grid__title">Cosmin Capitanu</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/9.png" alt="012" />
							<span class="grid__title">Candle stick</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/10.png" alt="022" />
							<span class="grid__title">hollow candle</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/11.png" alt="032" />
							<span class="grid__title">kagi</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/12.png" alt="013" />
							<span class="grid__title">line</span>
						</a>
					</li>
                    <li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/1.png" alt="01" />
							<span class="grid__title">Indices</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/2.png" alt="021" />
							<span class="grid__title">Bonds</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/3.png" alt="03" />
							<span class="grid__title">Money conversion</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/4.png" alt="042" />
							<span class="grid__title">charts</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/5.png" alt="011" />
							<span class="grid__title">buy | sell</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/6.png" alt="02" />
							<span class="grid__title">Cryptocurrecny</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/7.png" alt="031" />
							<span class="grid__title">Area</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/8.png" alt="04" />
							<span class="grid__title">Cosmin Capitanu</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/9.png" alt="012" />
							<span class="grid__title">Candle stick</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/10.png" alt="022" />
							<span class="grid__title">hollow candle</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/11.png" alt="032" />
							<span class="grid__title">kagi</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/12.png" alt="013" />
							<span class="grid__title">line</span>
						</a>
					</li>
                    <li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/1.png" alt="01" />
							<span class="grid__title">Indices</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/2.png" alt="021" />
							<span class="grid__title">Bonds</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/3.png" alt="03" />
							<span class="grid__title">Money conversion</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/4.png" alt="042" />
							<span class="grid__title">charts</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/5.png" alt="011" />
							<span class="grid__title">buy | sell</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/6.png" alt="02" />
							<span class="grid__title">Cryptocurrecny</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/7.png" alt="031" />
							<span class="grid__title">Area</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/8.png" alt="04" />
							<span class="grid__title">Cosmin Capitanu</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/9.png" alt="012" />
							<span class="grid__title">Candle stick</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/10.png" alt="022" />
							<span class="grid__title">hollow candle</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/11.png" alt="032" />
							<span class="grid__title">kagi</span>
						</a>
					</li>
					<li class="grid__item">
						<a class="grid__link" href="">
							<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
							<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="img/Dribbble1/img/12.png" alt="013" />
							<span class="grid__title">line</span>
						</a>
					</li>
                    
				</ul>
                
				
			</div>
			
		</main>
		
		<!--------------------------------------------------- Hover file html code ------------------------------------------------>
		
		<!--------------------------------------------------- Hover file Javascript code ------------------------------------------------>
		
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/dynamics.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/animOnScroll.js"></script>
		<script src="js/main.js"></script>
		<script>
		
		
			(function() {
				function getRandomInt(min, max) {
					return Math.floor(Math.random() * (max - min + 1)) + min;
				}

				[].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
					new IsoGrid(el, {
						type : 'scrollable',
						transform : 'translateX(-15vw) translateY(275px) rotateX(45deg) rotateZ(45deg)',
						stackItemsAnimation : {
							properties : function(pos) {
								return {
									translateZ: (pos+1) * 50,
									rotateZ: getRandomInt(-3, 3)
								};
							},
							options : function(pos, itemstotal) {
								return {
									type: dynamics.bezier,
									duration: 500,
									points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
									//delay: (itemstotal-pos-1)*40
								};
							}
						},
						onGridLoaded : function() {
							classie.add(document.body, 'grid-loaded');
						}
					});
				});
			})();
			
			
		</script>
		
		<!--------------------------------------------------- Hover file Javascript code ------------------------------------------------>
		
	</body>
	
</html>
