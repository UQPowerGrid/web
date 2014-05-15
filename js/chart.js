function drawChart_station1() {

    /*=====================*/
    /* pie chart */
    /*=====================*/
      var chart = new CanvasJS.Chart("pie_chartContainer",
    {
      backgroundColor: "",

      title:{
        text: "",
        fontColor: "#66008f",
        fontSize:"15"
      },
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        fontSize:"15",
        fontColor:"#ecf0f1"
      },
      toolTip:{
        enabled: false
      },
      data: [
      {        
        type: "doughnut",
        indexLabelPlacement: "outside",
        indexLabelFontFamily: "Garamond",       
        indexLabelFontSize: 14,
        indexLabelFontWeight: "bold",
        startAngle:0,
        indexLabelFontColor: "MistyRose",       
        indexLabelLineColor: "darkgrey",
        toolTipContent: "{name}: {y}%",
        showInLegend: true,
        dataPoints: [
        {  y: 70, indexLabel: "70%" , name: "TypeA",color:"#c0392b", legendMarkerType: "circle"},
        {  y: 18, indexLabel: "18%", name: "TypeB", color:"#1abc9c",legendMarkerType: "circle"},
        {  y: 12, indexLabel: "12%", name: "TypeC", color:"#3498db",legendMarkerType: "circle"}
        
        ]
      }
      ]
    });

    chart.render();

    /*====================================*/
    /* getting data from fusion table */
    /*====================================*/
    var query = "SELECT Voltage, Current FROM " +
        '1uuUz7E9WTu9ZIhLGIkhcH3BH1x3e0d2SLK6BcFci';
    var encodedQuery = encodeURIComponent(query);

    // Construct the URL
    var url = ['https://www.googleapis.com/fusiontables/v1/query'];
    url.push('?sql=' + encodedQuery);
    url.push('&key=AIzaSyDjZU0XgjV71cocROTXrzHe-vUy_abr4A4');
    url.push('&callback=?');

    // Send the JSONP request using jQuery
    $.ajax({
      url: url.join(''),
      dataType: 'jsonp',
      success: function (data) {
         var rows = data['rows'];
         localStorage.setItem("tmp", rows);
      }
    });

    var res = localStorage.getItem("tmp").split(",");


    /*====================================*/
    /* Chart table code */
    /*====================================*/
    var dps = []; // dataPoints

    var chart = new CanvasJS.Chart("chartContainer",{
      backgroundColor: "",
      title :{
        text: "" /*voltage*/
      },   
  axisX:{  
//Try Changing to MMMM
          valueFormatString: "HH:mm:ss"
  },   
      data: [{
        type: "line",
   xValueType: "dateTime",
        dataPoints: dps 
      }]
    });

    var xVal = 0;
    var yVal = 0; 
    var updateInterval = 1000;
    var dataLength = 10; // number of dataPoints visible at any point
 var count = 12;
 
 
 var dps2 = []; // dataPoints

    var chart2 = new CanvasJS.Chart("chartContainer2",{
      backgroundColor: "",
      title :{
        text: "" /*Current*/
      },   
  axisX:{  

          valueFormatString: "HH:mm:ss"
  },   
      data: [{
        type: "line",
   xValueType: "dateTime",
        dataPoints: dps2 
      }]
    });

    var xVal2 = 0;
    var yVal2 = 0; 
 

    var updateChart = function () {

          if(count < 0) count=12;
    
          // count is number of times loop runs to generate random dataPoints.
          
          
                
            yVal = parseInt(res[count*2]);
            dps.push({
              x: new Date(),
              y: yVal
            });
            
          
          if (dps.length > dataLength)
          {
            dps.shift();
          }
          
          chart.render();
    
    
    
    //chart2 update
    yVal2 = parseInt(res[count*2+1]);
            dps2.push({
              x: new Date(),
              y: yVal2
            });
            
    count--;
          if (dps2.length > dataLength)
          {
            dps2.shift();
          }
          
          chart2.render();

    };

    // generates first set of dataPoints
    updateChart();

    // update chart after specified time. 
    setInterval(function(){updateChart()}, updateInterval);
}