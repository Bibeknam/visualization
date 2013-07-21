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
	 				<li><a href="ajax.php">Home</a></li>
	 				<li><a href="map.php">Map</a></li>
	 				<li class="active"><a href="forex.php">Forex</a></li>
	 				<li><a href="dateconvert.php">Date Conversion</a></li>
	 				<li><a href="visualization.php">Map Visualization</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="span5">
 		<table class="table table-striped">
		<caption>Foreign Exchange Rate: Nepal Rastra Bank</caption>
		<thead>
			<tr>
				<th>Currency</th>
				<th>Buying/Rs.</th>
				<th>Selling/Rs.</th>
			</tr>
		</thead>
		<tbody id="tablebodyC">
		</tbody>
	</table>	
	<div id="loadimage" align="center">
	</div>	
</div>
</div>
</div>
<script type="text/javascript">
		$(document).ready(function(){
		    $.ajax({
		    	url: 'proxy.php?url=http://nepalapi.appspot.com/forex/today',
		    	type: 'GET',
		    	dataType: 'json',
		    	beforeSend: function(){
		    		$('#loadimage').html('<img src="img/ajax-loader.gif">');
		    	},
		        success: function(data, textStatus, xhr){
		        	$.each(data, function(index, data) {
		        		$('#tablebodyC').append('<tr>');
				  		$('#tablebodyC').append('<td>'+data.currency+'</td>');
				  		$('#tablebodyC').append('<td>'+data.Selling+'</td>');
				  		$('#tablebodyC').append('<td>'+data.Buying+'</td>');
				  		$('#tablebodyC').append('</tr>');
					});
					$('#loadimage').hide();
		        },


			});
		});
	</script>
</body>
</html>