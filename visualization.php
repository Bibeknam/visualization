<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Simple Ajax Demo</title>
  <!-- Bootstrap -->
  <link href='css/bootstrap.min.css' rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  
<style type="text/css">
  #map_canvas{
    width: 100%;
    height: 500px;
  }
</style>
</head>
<body>
<div class="container">
  <section>
    <h1>Jquery Ajax Demo</h1>
  </section>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="map.php">Graph</a></li>
          <li class="active"><a href="visualization.php">Map Visualization</a></li>
        </ul>
      </div>
    </div>
   </div>
 </div>
 <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div id="map_canvas">
        </div>
      </div>  
    </div>
</div>
 <script src="js/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.ui.map.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

        $('#map_canvas').gmap({'zoom':7,'center':'28.5,84','scrollwheel':false}).bind('init', function(ev, map) {
          var url = 'zone.php';
          $.getJSON(url, function(data) {
            $.each(data, function(index, data){
              $('#map_canvas').gmap('addMarker', {'position': new google.maps.LatLng(data.latitude, data.longitude), 'bounds': false}).click(function() {
                  $('#map_canvas').gmap('openInfoWindow', {'content': 
                    'Zone: '+ data.name+'<br/>'+ 
                    'Total Population: ' + data.pop_total + '<br/>' + 
                    'Male: ' + data.pop_male + '<br/>' + 
                    'Female: ' + data.pop_female + '<br/>'
                  }, this);
              });
            });
          });
        });
    });
</script>
</body>
</html>