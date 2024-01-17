<!DOCTYPE html>
<html>
<head>
	 <title>User Registration</title>

  <link rel="icon" href="img/logo1.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/style_dior.css">
	<script src="dist/sweetalert2.all.min.js"></script>

	<!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<style>
	#play{
  	background-image: url('image/play.png');
	}
</style>

<body>
	<div class="banner">
		<video autoplay loop muted>
			<source src="video/background.mp4">
		</video>
	</div>

  <form role="form" action="cek_regist.php" method="post">

	  <div class="login-box">

				<h5>Welcome to <br>
				Dior Virtual Exhibit SS 2022 </h5>

	        <br>
	        <p style="left:70px; top: 240px;">Name</p>
	        <input class="input" type="text" name="nama" id="nama" placeholder="Insert Name" style="left:150px; top: 240px;">

	        <p style="left:70px; top: 310px;">E-mail</p>
	        <input class="input" type="text" id="email" name="email" placeholder="Insert E-mail" style="left:150px; top: 310px;"><br><br>

					<button type="submit" class="submit" style="position: absolute;width: 311px; height: 49px; font-family: Zen Kaku Gothic Antique; font-style: normal; font-weight: bold; font-size: 23px; line-height: 46px; text-align: center; color: #FFFFFF; ">Submit</button>
	  	
	  		<div class="audio">
					<button type="reset" id="play"></button>
			  </div>
	  </div>

	  
	</form>


		<script>
			var musik = new Audio();
			musik.src = "sound.m4a";
			musik.loop = true;
			musik.play();

			function mulaiAudio(){

				var play=document.getElementById("play");

				play.addEventListener('click', fplay);
				
				function fplay(){
					if(musik.paused){
						musik.play();
						play.style.background="url('image/play.png')"
					}else{
						musik.pause();
						play.style.background="url(image/pause.png)"
					}
				}
			}
			window.addEventListener('load', mulaiAudio);
		</script>