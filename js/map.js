$( document ).ready(function() {
    initialize();
    drawChart_station1();
	
	
});

var a = new Array();
a[2] = 'images/icon_green.png';
a[1] = 'images/icon_green.png';
a[0] = 'images/icon_green.png';
a[3] = 'images/icon_green.png';
var error = new google.maps.MarkerImage(
    'images/icon_red.png',
    null, /* size is determined at runtime */
    null, /* origin is 0,0 */
    null, /* anchor is bottom center of the scaled image */
    new google.maps.Size(30, 30)
  );
var markers = [];
var map = null;
var polyline = null;
var polyline2 = null;
var infowindow = new google.maps.InfoWindow({});

//createMarker function
function createMarker(id, latLng, title, content) {
        //define maker
        var Icon = new google.maps.MarkerImage(
            a[id],
            null, /* size is determined at runtime */
            null, /* origin is 0,0 */
            null, /* anchor is bottom center of the scaled image */
            new google.maps.Size(30, 30)
        );  

        var marker = new google.maps.Marker({
          position: latLng,
          map: map,
          title: title,
		      icon: Icon
        });
		markers.push(marker);

//Onclick listener(mouseover)
        google.maps.event.addListener(marker, "click", function() {
 
            infowindow.setContent(content);
            infowindow.open(map, marker);
        });

}
	  
// initialization function (focus location ,map type and zoom level)
    function initialize() {
    var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-27.495417, 153.010395),
    mapTypeId: google.maps.MapTypeId.ROADMAP 
      };
      map = new google.maps.Map(document.getElementById('map_canvas'),
          mapOptions);
		  
//reading location file
      var script = document.createElement('script');
      script.src = '\week.json';
      document.getElementsByTagName('head')[0].appendChild(script);
	  
 //create line using coordinates	
	var polylinecoordinates = [
	new google.maps.LatLng(-27.494886, 153.008541),
    new google.maps.LatLng(-27.495315, 153.008451),
    new google.maps.LatLng(-27.495592, 153.010260),
	new google.maps.LatLng(-27.495417, 153.010395)
   
  ];
  //draw line
  polyline = new google.maps.Polyline({
    path: polylinecoordinates,
    strokeColor: '#4CC417',
    strokeOpacity: 1.0,
    strokeWeight: 2,
	editable: false,
  });
  
  polyline.setMap(map);
  
  	var polylinecoordinates2 = [
	new google.maps.LatLng(-27.494887, 153.008542),
    new google.maps.LatLng(-27.495308, 153.008465),
    new google.maps.LatLng(-27.495575, 153.010239),
	new google.maps.LatLng(-27.495485, 153.010228),
    new google.maps.LatLng(-27.495497, 153.010290),
    new google.maps.LatLng(-27.495417, 153.010395)
   
  ];
  //draw line
  polyline2 = new google.maps.Polyline({
    path: polylinecoordinates2,
    strokeColor: '#0000A0',
    strokeOpacity: 1.0,
    strokeWeight: 2,
	editable: false,
  });
  
  polyline2.setMap(map);
  
  var polylinecoordinates3 = [
	new google.maps.LatLng(-27.495417, 153.010395),
    new google.maps.LatLng(-27.497552,153.013018),   
  ];
  //draw line
	var polyline3 = new google.maps.Polyline({
    path: polylinecoordinates3,
    strokeColor: '#4CC417',
    strokeOpacity: 1.0,
    strokeWeight: 2,
	editable: false,
  });
  
  polyline3.setMap(map);
  
   	var polylinecoordinates4 = [
    new google.maps.LatLng(-27.497552,153.013018), 
	new google.maps.LatLng(-27.495363,153.015958)
  ];
  //draw line
	var polyline4 = new google.maps.Polyline({
    path: polylinecoordinates4,
    strokeColor: '#4CC417',
    strokeOpacity: 1.0,
    strokeWeight: 2,
	editable: false,
  });
  
  polyline4.setMap(map);
  //toggle polyline in how many milisecond
  setInterval(togglePolyline, 495); 
 }
 
 
//toggle the polyline to make it blink	
function togglePolyline(){
	if (polyline.getMap() == null){
		polyline.setMap(map);}
	else{
		polyline.setMap(null);}
	if (polyline2.getMap() == null){
		polyline2.setMap(map);}
	else{
		polyline2.setMap(null);}
}

	 
	 
	//eqfeed call back will take result array and loop through each marker
	window.eqfeed_callback = function(results) {
      var bounds=new google.maps.LatLngBounds();
      for (var i = 0; i < 4; i++) {

        var mappy = results.features[i]; 
        var coords = mappy.geometry.coordinates; 
        var latLng = new google.maps.LatLng(coords[0],coords[1]); 
        bounds.extend(latLng);
				
        var content ="<div style='height:100px; width:300px; overflow:auto;'><table>";
        content += "<tr><th align='left'>Location</th><td>"+mappy.properties.Location+"</td></tr>";
        content += "<tr><th align='left'>Voltages</th><td>"+mappy.properties.Voltages+"</td></tr>";
        content += "<tr><th align='left'>Currents</th><td>"+mappy.properties.Currents+"</td></tr>";
        content += "<tr><th align='left'>Frequency</th><td>"+mappy.properties.Frequency+"</td></tr>";
        content +="</table>";
        	
		    createMarker(i,latLng,mappy.WifiMacAddress,content);
      }
      //map.fitBounds(bounds);
    }
	function noDanger(){
		document.getElementById("warning").innerHTML="<div class='normal alert alert-success'><i class='glyphicon glyphicon-ok-sign'></i><p><strong>Great! </strong>All stations working fine</p></div>";
		document.getElementById("su3").innerHTML = "<button onClick='clickStation(2)' type='button' class='btn btn-success col-md-2'>Station3</button>";
		markers[2].setIcon(a[2]);
	}
	
	
	
	function clickStation(id){
		map.panTo(markers[id].getPosition());
		map.setZoom(16);
		if(id==2){
			var myVar=setTimeout(function(){	
				markers[id].setIcon(error);
				document.getElementById("su3").innerHTML = "<button onClick='clickStation(2)' type='button' class='btn btn-danger col-md-2'>Station3</button>";
				
				document.getElementById("warning").innerHTML= "<div class='warning alert alert-danger fade in'><i class='glyphicon glyphicon-info-sign'></i><p><strong>Warning!</strong>Detected failure from station 3</p><p><button type='button'class='btn btn-danger' data-toggle='modal' data-target='#email'>Report</button><button onClick='noDanger()' type='button' class='btn btn-default'>Dismiss</button></p></div>";
				clearTimeout(myVar);
				},3000);
		
		}

	}