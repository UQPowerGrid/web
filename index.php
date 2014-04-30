<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="bootstrap-3.1.1/js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-3.1.1/css/bootstrap.css.map">
	<script type="text/javascript" src="bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Login Page</title>

</head>

<body>
	<div class="container">
		<div class="col-md-6">
			<div class="jumbotron">
			  <h1>Welcome to UQ Smart Grid!</h1>
			  <p>
			  	<form class="form-horizontal" role="form" action="login.php" method="POST">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input name="username" type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
                <h3 style="color:red"><?php echo $_SESSION['wrong']; $_SESSION['wrong'] = ""  ?></h3>
			  </p>
			</div>
		</div>
	</div>
</body>
</html>
