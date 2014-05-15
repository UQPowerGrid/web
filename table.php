<!Doctype html>
<html lang="en">
<head>
	<title>UQ Power Grid</title>

	<!-- Loading Bootstrap UI -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

	<!-- Loading normalize & local css -->
	<link rel="stylesheet" href="css/map.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/index.css">
	<!-- Loading Flat UI -->
	<link rel='stylesheet' href='css/flat-ui.css' type='text/css' media="screen">

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
	<script src="https://www.google.com/jsapi"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
    <script src="js/canvasjs.min.js"></script>
    <script src="js/chart.js"></script>
	<script src="js/map.js"></script>
	

</head>
<?php
//verify if user is logged in
 include 'checkHome.php';
?>
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

	
<div class="row sub_content">
<div class="col-md-1">
<a button id='circle' class="btn" a href="#daily" data-slide-id="#daily"><br>Daily</a>

<a button id='circle' class="btn" a href="tableWeek.php" data-slide-id="#weekly"><br>Weekly</a>

<a button id='circle' class="btn" a href="tableMonth.php" data-slide-id="#monthly"><br>Monthly</a>

</div>

<div class="col-md-8">
 <div id="daily" class="slide-div">
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
			<td>12:40</td>
			<td>29 V</td>
			<td>01:25</td>
			<td>29 V</td>
			<td>02:05</td>
			<td>29 V</td>
			
			
		</tr>
		<tr>
			<td>12:05</td>
			<td>29 V</td>
			<td>12:45</td>
			<td>29 V</td>
			<td>01:30</td>
			<td>29 V</td>
			<td>02:10</td>
			<td>29 V</td>
			
		</tr>
		
		<tr>
			<td>12:10</td>
			<td>29 V</td>
			<td>12:55</td>
			<td>29 V</td>
			<td>01:35</td>
			<td>29 V</td>
			<td>02:15</td>
			<td>29 V</td>
			
		</tr>
		<tr>
			<td>12:15</td>
			<td>29 V</td>
			<td>01:00</td>
			<td>29 V</td>
			<td>01:40</td>
			<td>29 V</td>
			<td>02:20</td>
			<td>29 V</td>
			
		</tr>
		
				<tr>
			<td>12:20</td>
			<td>29 V</td>
			<td>01:05</td>
			<td>29 V</td>
			<td>01:45</td>
			<td>29 V</td>
			<td>02:25</td>
			<td>29 V</td>
			
		</tr>
		<tr>
			<td>12:25</td>
			<td>29 V</td>
			<td>01:10</td>
			<td>29 V</td>
			<td>01:50</td>
			<td>29 V</td>
			<td>02:30</td>
			<td>29 V</td>
			
		</tr>
		
				<tr>
			<td>12:30</td>
			<td>29 V</td>
			<td>01:15</td>
			<td>29 V</td>
			<td>01:55</td>
			<td>29 V</td>
			<td>02:35</td>
			<td>29 V</td>
			
		</tr>
		<tr>
			<td>12:35</td>
			<td>29 V</td>
			<td>01:20</td>
			<td>29 V</td>
			<td>02:00</td>
			<td>29 V</td>
			<td>02:40</td>
			<td>29 V</td>
			
		</tr>
	
  </table>
 </div>
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
<script src="js/changeDiv.js"></script>
</body>
</html>
