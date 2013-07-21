<?php
	error_reporting(E_ALL);

	$conn = mysql_connect('localhost','root','');
	if(!$conn){
		die('Mysql connection error '.mysql_error());
	}

	$db = mysql_select_db('population',$conn);
	if(!$db){
		die('Database selection failed '.mysql_error());
	}


	$sql = 'SELECT a.name as name, sum(b.pop_male) as pop_male, sum(b.pop_female) as pop_female, sum(b.pop_total) as pop_total, a.Latitude as latitude, a.Longitude as longitude FROM pop_district b inner join zone a on a.id = b.zoneId group by b.zoneId';

	$result = mysql_query($sql,$conn);
	if(!$result){
		die(mysql_error());
	}


	$data = array();
	while($row = mysql_fetch_assoc($result)){
		$row_data = array(
			'name' => $row['name'], 
			'pop_male' => $row['pop_male'],
		 	'pop_female' => $row['pop_female'],
		 	'pop_total' => $row['pop_total'],
		 	'latitude' => $row['latitude'],
		 	'longitude' => $row['longitude']
		 );
		array_push($data, $row_data);
	}
	echo json_encode($data);
?>