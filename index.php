<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simple Ajax Demo</title>
	<!-- Bootstrap -->
	<link href='css/bootstrap.min.css' rel="stylesheet">
		
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<script type="text/javascript">
		$(document).ready(function(){
			/*var url = 'district.php';
		    $.getJSON(url, function(data) {
		        $.each(data, function(index, data) {
		        	$('#tablebody').append('<tr>');
				  	$('#tablebody').append('<td>'+data.name+'</td>');
				  	$('#tablebody').append('<td>'+data.pop_male+'</td>');
				  	$('#tablebody').append('<td>'+data.pop_female+'</td>');
				  	$('#tablebody').append('<td>'+data.pop_total+'</td>');
				  	$('#tablebody').append('</tr>');
				});

			});*/
			var url = 'zone.php';
			$.getJSON(url, function(data) {
				$.each(data, function(index, data) {
		        	$('#tablebodyZ').append('<tr>');
				  	$('#tablebodyZ').append('<td>'+data.name+'</td>');
				  	$('#tablebodyZ').append('<td>'+data.pop_male+'</td>');
				  	$('#tablebodyZ').append('<td>'+data.pop_female+'</td>');
				  	$('#tablebodyZ').append('<td>'+data.pop_total+'</td>');
				  	$('#tablebodyZ').append('</tr>');
				});
			});
		});
	</script>
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
	 				<li class="active"><a href="ajax.php">Home</a></li>
	 				<li><a href="map.php">Graph</a></li>
	 				<li><a href="visualization.php">Map Visualization</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>
 </div>
 <div class="container">
 	<table class="table table-striped">
		<caption>Population of Zones of Nepal 2013</caption>
		<thead>
			<tr>
				<th>Zone</th>
				<th>Male Population</th>
				<th>Female Population</th>
				<th>Total Population</th>
			</tr>
		</thead>
		<tbody id="tablebodyZ">
		</tbody>
	</table>
	<!--<table class="table table-striped">
		<caption>Population of Districts of Nepal 2013</caption>
		<thead>
			<tr>
				<th>District</th>
				<th>Male Population</th>
				<th>Female Population</th>
				<th>Total Population</th>
			</tr>
		</thead>
		<tbody id="tablebody">
		</tbody>
	</table>
	<hr />-->
	
</div>
</body>
</html>