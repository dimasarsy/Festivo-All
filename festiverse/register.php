<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <link href="assets/css/sty.css" rel="stylesheet">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body style="background: url(assets/img/awal.jpg);">

  <form role="form" action="cek_register.php" method="post">

	  <div class="login-box">

			<h5>Register</h5>

					<p style="left:70px; top: 120px;">Username</p>
	        <input class="input" type="text" name="username" id="username" placeholder="Insert Username" style="left:180px; top: 120px;">
	        	
	        <p style="left:70px; top: 180px;">E-mail</p>
	        <input class="input" type="text" name="email" id="email" placeholder="Insert E-mail" style="left:180px; top: 180px;">

	        <p style="left:70px; top: 240px;">Password</p>
	        <input class="input" type="password" id="password" name="password" placeholder="Insert Password" style="left:180px; top: 240px;"><br><br>

			<button type="submit" class="submit" style="position: absolute;width: 311px; height: 49px; font-family: Zen Kaku Gothic Antique; font-style: normal; font-weight: bold; font-size: 23px; line-height: 46px; text-align: center; color: #FFFFFF; ">Submit
			</button>
			<a href="login.php">Already Have an account ?</a>
	  </div>

	  
	</form>

</body>
</html>