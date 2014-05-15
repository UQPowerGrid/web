<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>

	<!-- Loading normalize css -->
	<link rel="stylesheet" href="css/normalize.css">

	<!-- Loading Bootstrap UI -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

	<!-- Loading Flat UI & main css -->
	<link rel='stylesheet' href='css/flat-ui.css' type='text/css' media="screen">
	<link rel="stylesheet" href="css/index.css">

	<!-- ============= Load all JS here =============-->
    <script src="js/jquery-1.9.0.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/application.js"></script>
</head>

<body>
	<div class="container">
		<div class="col-sm-5 umbotron login">
		  <h1>Welcome to UQ Smart Grid!</h1>
		  	<form class="col-centered" role="form" action="checkLogin.php" method="POST">
			  	<div class="form-group">
		     		<!-- Append -->
		     		<div class="input-group">
			    		<input name="username" type="username" class="form-control" placeholder="Email" />
			    		<span class="input-group-addon">@ uq.edu.au</span>
		    		</div>
			  	</div>
			  	<div class="form-group">
					<div class="input-group">
						<input type="password" name="password" class="form-control" placeholder="Password" />
						<span class="input-icon fui-lock"></span>
					</div>
				</div>
				<button class="col-centered btn btn-embossed btn-primary">Sign-in</button>
				<br>
				 <?php
	  if(isset($_SESSION['username']) && $_SESSION['wrongComb']==True) {
	   echo "<font color = 'red'>Wrong combination of username and password! </font></br>";
	   echo "Try again";
	   }
	   //log logging in time into text document 
	   else if(isset($_SESSION['username']) && $_SESSION['wrongComb']==False)
	  
	 ?>
		  	</form>
		</div>
	</div>
</body>
</html>
