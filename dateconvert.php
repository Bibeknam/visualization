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
			$('#convertBS').click(function(){
				var input = $('#dateBS').val();
				var url = 'proxy.php?url=http://nepalicalender.appspot.com/toenglish/'+input;
				$.getJSON(url, function(data) {	
					$('#resultAD').html('The converted date in AD is: '+data.year+'-'+data.month+'-'+data.day);
				});	
			});
			$('#convertAD').click(function(){
				var input = $('#dateAD').val();
				var url = 'proxy.php?url=http://nepalicalender.appspot.com/tonepali/'+input;
				$.getJSON(url, function(data) {	
					$('#resultBS').html('The converted date in BS is: '+data.year+'-'+data.month+'-'+data.day);
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
	 				<li><a href="ajax.php">Home</a></li>
	 				<li><a href="map.php">Map</a></li>
	 				<li><a href="forex.php">Forex</a></li>
	 				<li class="active"><a href="dateconvert.php">Date Conversion</a></li>
	 				<li><a href="visualization.php">Map Visualization</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>
 </div>
 <div class="container">
 	<div class="row-fluid">
 		<div class="span4">
 			<form>
 				<label>Enter Data in BS: </label>
 				<input type="text" id="dateBS" ><br/>
 				<button type="button" id="convertBS" class="btn btn-primary">Convert to AD</button>
 			</form>
 			<p id="resultAD"></p>
		</div>
		<div class="span4">
 			<form>
 				<label>Enter Data in AD: </label>
 				<input type="text" id="dateAD" ><br/>
 				<button type="button" id="convertAD" class="btn btn-primary">Convert to BS</button>
 			</form>
 			<p id="resultBS"></p>
		</div>
		</div>
	</div>
</div>
</body>
</html>