<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecossistema</title>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<?php

		require_once "classes/Search.class.php";
		require_once "classes/Util.class.php";
		require_once "classes/getData.php";

		$search = new Search();
		$util = new Util();

		$result = $search->getNat_publicoAlvo_All();
		//$result2 = $search->getNat_publicoAlvo_Org();
		//$result3 = $search->getNat_publicoAlvo_Ini();

		$naturezas = $util->getArrayofKeys($result, "tipo");
		$natPublicoArray = $util->getArrayKeyValue($result, $naturezas, "publico_atendido", "tipo");
		$natPublicoQuantArray = $util->getQuantidade($natPublicoArray, $naturezas);
		
		//print_r($natPublicoArray);
		//print_r($result2);
		//print_r($result3);?>

		<script type="text/javascript">

			<?php $i = 0; ?>
			for(var i = 0; i < 12; i++){
		      google.charts.load('current', {
		      callback: function drawChart() {

		        var data = new google.visualization.arrayToDataTable(<?php $util->getChartdata($natPublicoQuantArray[$naturezas[$i]]);?>);

		        var options = {
		          title: 'Title',
		          width:400,
      			  height:0,
      			  is3D: true
		        };

		        var container = document.getElementById('chart').appendChild(document.createElement('div'));
			    var chart = new google.visualization.PieChart(container);
			    chart.draw(data, options);
    			
		      },
		      packages: ['corechart']
		      });

		      <?php ++$i;?>
		    } 

    	</script>

  </head>
  <body>
  	 <ul id="chart"></ul>
  </body>
</html>
