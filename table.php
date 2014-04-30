<!Doctype html>
<html lang="en">
<head>
	<title>UQ Power Grid</title>
	<script type="text/javascript" src="bootstrap-3.1.1/js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-3.1.1/css/bootstrap.css.map">
	<script type="text/javascript" src="bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<link rel="stylesheet" href="css/map.css">
	<link rel="stylesheet" href="css/normalize.css">

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
    <script type="text/javascript" src="js/canvasjs.min.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
	<script type="text/javascript" src="js/map.js"></script>
    
   
    
 
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">UQ Power Grid</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="map.php">MAP</a></li>
					<li class="active"><a href="table.php">HISTORY</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
<br>
  <!-- Table -->
  <table class="table">
    <thead>
		<tr>
			<th>Time</th>
			<th>Value</th>
			<th>Time</th>
			<th>Value</th>
			<th>Time</th>
			<th>Value</th>
			<th>Time</th>
			<th>Value</th>
			
		</tr>
	</thead>
	
		<tr>
			<td>12:00</td>
			<td>29 V</td>
			<td>12:05</td>
			<td>29 V</td>
			<td>12:10</td>
			<td>29 V</td>
			<td>12:15</td>
			<td>29 V</td>
			
			
		</tr>
		<tr>
			<td>12:20</td>
			<td>29 V</td>
			<td>12:25</td>
			<td>29 V</td>
			<td>12:30</td>
			<td>29 V</td>
			<td>12:35</td>
			<td>29 V</td>
			
		</tr>
		
		<tr>
			<td>12:40</td>
			<td>29 V</td>
			<td>12:45</td>
			<td>29 V</td>
			<td>12:50</td>
			<td>29 V</td>
			<td>12:55</td>
			<td>29 V</td>
			
		</tr>
		<tr>
			<td>01:00</td>
			<td>29 V</td>
			<td>01:05</td>
			<td>29 V</td>
			<td>01:10</td>
			<td>29 V</td>
			<td>01:15</td>
			<td>29 V</td>
			
		</tr>
		
				<tr>
			<td>01:20</td>
			<td>29 V</td>
			<td>01:25</td>
			<td>29 V</td>
			<td>01:30</td>
			<td>29 V</td>
			<td>01:35</td>
			<td>29 V</td>
			
		</tr>
		<tr>
			<td>01:40</td>
			<td>29 V</td>
			<td>01:45</td>
			<td>29 V</td>
			<td>01:50</td>
			<td>29 V</td>
			<td>01:55</td>
			<td>29 V</td>
			
		</tr>
		
				<tr>
			<td>02:00</td>
			<td>29 V</td>
			<td>02:05</td>
			<td>29 V</td>
			<td>02:10</td>
			<td>29 V</td>
			<td>02:15</td>
			<td>29 V</td>
			
		</tr>
		<tr>
			<td>02:20</td>
			<td>29 V</td>
			<td>02:25</td>
			<td>29 V</td>
			<td>02:30</td>
			<td>29 V</td>
			<td>02:35</td>
			<td>29 V</td>
			
		</tr>
	
  </table>
  
  
</div>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Download <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Excel</a></li>
    <li><a href="#">CSV</a></li>
    <li><a href="#">XML</a></li>
   
  </ul>
</div>
</body>
</html>
