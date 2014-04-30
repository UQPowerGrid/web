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
					<li class="active"><a href="#">MAP</a></li>
					<li><a href="table.php">HISTORY</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<div class="content container">
		<!-- left part is map and right hand part is panel -->
		<div class="row">
			<button  onClick="clickStation(0)" type="button" class="btn btn-success col-md-2">Station1</button>
			<button onClick="clickStation(1)" type="button" class="btn btn-success col-md-2">Station2</button>
			<div id="su3"><button id="sub3" onClick="clickStation(2)" type="button" class="btn btn-success col-md-2">Station3</button></div>
			<button onClick="clickStation(3)" type="button" class="btn btn-success col-md-2">Station4</button>
			<button type="button" class="btn btn-success col-md-2">Station5</button>
			<button type="button" class="btn btn-success col-md-2">Station6</button>
		</div>

		<div class="row sub_content">
			<div class="col-xs-12 col-md-8">
				<div id="map_canvas" style="height: 300px; width: 100%;"></div>				
				<!-- Nav tabs -->
				<ul id="infotabs" class="nav nav-tabs">
				  <li class="active"><a href="#voltage" data-toggle="tab">Voltage</a></li>
				  <li><a href="#current" data-toggle="tab">Current</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane active" id="voltage">
				  	<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				  </div>
				  <div class="tab-pane" id="current">
				  	<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
				  </div>
				</div>
			</div>
	  		<div  class="col-xs-6 col-md-4">
	  			<div id="warning"><div  class="normal alert alert-success"><i class="glyphicon glyphicon-ok-sign"></i><p><strong>   Great! </strong>All stations working fine</p></div></div>
	  			
			    <div id="pie_chartContainer" style="height: 300px; width: 100%;"></div>
	  		</div>	
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
</body>
</html>
