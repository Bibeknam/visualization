<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Map - Simple Ajax Demo</title>
	<!-- Bootstrap -->
	<link href='css/bootstrap.min.css' rel="stylesheet">
		
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/modules/exporting.js"></script>
	<script src="js/json2.js"></script>

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<script type="text/javascript">
		$(document).ready(function(){
			var url = 'zone.php';
			var zone_name = [];
			var male_pop = [];
			var female_pop = [];
			var tot_pop = [];
			$.getJSON(url, function(data) {
				$.each(data, function(index, data) {
		      		zone_name.push(data.name);
		      		male_pop.push(parseInt(data.pop_male));
		      		female_pop.push(parseInt(data.pop_female));
		      		tot_pop.push(parseInt(data.pop_total));
			     });
			

    			$('#chart').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Popolution of Nepal zone wise'
                    },
                    subtitle: {
                        text: 'Source: cbs.gov.np'
                    },
                    xAxis: {
                        categories: zone_name,
                        title: {
                            text: null
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Population',
                            align: 'high'
                        },
                        labels: {
                            overflow: 'justify'
                        }
                    },
                    tooltip: {
                        valueSuffix: ''
                    },
                    plotOptions: {
                        bar: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -100,
                        y: 100,
                        floating: true,
                        borderWidth: 1,
                        backgroundColor: '#FFFFFF',
                        shadow: true
                    },
                    credits: {
                        enabled: false
                    },
                    series: [{
                        name: 'Male Population',
                        data: male_pop
                    }, {
                        name: 'Female Population',
                        data: female_pop
                    }, {
                        name: 'Total Population',
                        data:  tot_pop
                    }]
                });
                $('#piechart').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Zone wise population of Nepal, 2013'
                    },
                    
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                            }
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'District Population Data',
                        data: [
                            [zone_name[0], tot_pop[0]],
                            [zone_name[1], tot_pop[1]],
                            [zone_name[2], tot_pop[2]],
                            [zone_name[3], tot_pop[3]],
                            [zone_name[4], tot_pop[4]],
                            [zone_name[5], tot_pop[5]],
                            [zone_name[6], tot_pop[6]],
                            [zone_name[7], tot_pop[7]],
                            [zone_name[9], tot_pop[9]],
                            [zone_name[10], tot_pop[10]],
                            [zone_name[11], tot_pop[11]],
                            [zone_name[12], tot_pop[12]],
                            [zone_name[13], tot_pop[13]],
                        ]
                    }]
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
	 				<li><a href="index.php">Home</a></li>
	 				<li class="active"><a href="map.php">Graph</a></li>
                    <li><a href="visualization.php">Map Visualization</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>
 </div>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div id="chart">
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span8">
            <div id="piechart">
            </div>
        </div>
    </div>
</div>
</body>
</html>