<?php 
	$sitename; 
?> 
<!Doctype html>
<html lang="en">
<head>
	<title>UQ Power Grid</title>

	<!-- Loading Bootstrap UI -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/prettify.css">
	<!-- Loading normalize & local css -->
	<link rel="stylesheet" href="css/map.css">
	<link rel="stylesheet" href="css/normalize.css">

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

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
				</button>
				<a class="navbar-brand" href="#">UQ Power Grid</a>
				<form role="search" class="navbar-form navbar-left">
				  <div class="form-group">
				    <input type="text" placeholder="Search" class="form-control">
				  </div>
				  <button class="btn btn-default" type="submit">Submit</button>		  
				</form>
				<div class="btn-group navbar-form navbar-left">
				  <button type="button" class="btn btn-default dropdown-toggle notification-custom-button" data-toggle="modal" data-target="#email">
				    Warning <span class="site-badge badge badge-error pull-right">12</span>
				  </button>
				</div>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">MAP</a></li>
					<li><a href="table.php">HISTORY</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="container">
		<div class="topper">
			<!-- <button  onClick="clickStation(0)" type="button" class="btn btn-success col-md-2">Station1</button>
			<button onClick="clickStation(1)" type="button" class="btn btn-success col-md-2">Station2</button>
			<div id="su3"><button id="sub3" onClick="clickStation(2)" type="button" class="btn btn-success col-md-2">Station3</button></div>
			<button onClick="clickStation(3)" type="button" class="btn btn-success col-md-2">Station4</button>
			<button type="button" class="btn btn-success col-md-2">Station5</button>
			<button type="button" class="btn btn-success col-md-2">Station6</button> -->
			<button id='circle' class="btn" onClick="clickStation(0)">S1</button>
			<button id='circle' class="btn" onClick="clickStation(1)">S2</button>
			<button id='circle' class="btn" onClick="clickStation(2)">S3</button>
			<button id='circle' class="btn" onClick="clickStation(3)">S4</button>
			<button id='circle' class="btn" onClick="clickStation(4)">S5</button>
			<button id='circle' class="btn" onClick="clickStation(5)">S6</button>
			<button id='circle' class="btn" onClick="clickStation(6)">S7</button>
			<button id='circle' class="btn" onClick="clickStation(7)">S8</button>
			<button id='circle' class="btn" onClick="clickStation(8)">S9</button>
			<button id='circle' class="btn" onClick="clickStation(9)">S10</button>
			<button id='circle' class="btn" onClick="clickStation(10)">S11</button>
			<button id='circle' class="btn" onClick="clickStation(11)">S12</button>
			<button id='circle' class="btn" onClick="clickStation(12)">S13</button>
			<button id='circle' class="btn" onClick="clickStation(13)">S14</button>
			<button id='circle' class="btn" onClick="clickStation(14)">S15</button>
			<button id='circle' class="btn" onClick="clickStation(15)">S16</button>
			<button id='circle' class="btn" onClick="clickStation(16)">S17</button>
			<button id='circle' class="btn" onClick="clickStation(17)">S18</button>
			<button id='circle' class="btn" onClick="clickStation(18)">S19</button>
			<button id='circle' class="btn" onClick="clickStation(19)">S20</button>
		</div>

		<div class="row sub_content">
			<div class="col-md-8">
				<div id="map_canvas" style="height: 400px; width: 100%;"></div>
				<div class="row line-chart">
					<div class="col-md-2"></div>
					<button class="btn btn-embossed btn-primary button_1 col-md-4">
					  Voltage
					</button>
					<button class="btn btn-embossed btn-primary button_2 col-md-4">
					  Current
					</button>
					<div class="col-md-2"></div>
				</div>
				<div id="chartContainer" class="voltage"></div>
				<div id="chartContainer2" class="current" style="display:none;"></div>
			</div>
	  		<div class="col-md-4">
				<button class="site-custom-btn btn btn-primary">Station #1<span class="pull-right glyphicon glyphicon-record"></span></button>
				<div class="well well-sm">Advanced Engineering Building, BLK #49.</div>
				<button class="site-custom-btn btn btn-primary">History<span class="pull-right glyphicon glyphicon-record"></span></button>
	  			<div id="pie_chartContainer"></div>
	  		</div>	
		</div>
		<!-- Modal -->
		<div id="email" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
				<form role="form">
				  <div class="form-group">
				    <label class="col-sm-4 control-label">Send email to:</label>
				    <div class="col-sm-8">
				      <p class="form-control-static">techsupport@uq.edu.power.com</p>
				    </div>
				  </div>
				  <textarea class="form-control focusedInput" rows="3"></textarea>
				  <div class="modal-footer">
				  	<button type="button" id="email_btn" data-dismiss="modal" class="btn btn-danger">Send</button>
				    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				  </div>
				</form>
		    </div>
		  </div>
		</div>
		<div class="email_success alert alert-success">you have send a email to tech support team!</div>

	</div>
	<script>
		$( document ).ready(function() {
			initialize();
    		drawChart_station1();
    		$('.button_1').click(function() {
				$(".voltage").show();
				$(".current").hide();
			});
			$('.button_2').click(function() {
				$(".voltage").hide();
				$(".current").show();
			});
		});
	</script>
</body>
</html>
