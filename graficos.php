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

    require_once "classes/getData.php";

    $report = new GetDataReport;

    ?>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(relatorioSubtemasMaisTrabalhados);
      
    function relatorioSubtemasMaisTrabalhados() {
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.arrayToDataTable(<?php $report->subtemas_mais_trabalhados() ?>);
      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 1000, height: 1000});
    }

    </script>
  </head>

  <body>
    <h1>Mostrar os subtemas mais trabalhados entre as orgs/iniciativas mapeadas.</h1>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>
