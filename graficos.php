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
      
      // set inner height to 30 pixels per row
      var chartAreaHeight = data.getNumberOfRows() * 30;
      
      // add padding to outer height to accomodate title, axis labels, etc
      var chartHeight = chartAreaHeight + 80;
      
      // Instantiate and draw our chart, passing in some options.
      var options = { height: chartHeight,
        chartArea: {width: '60%', height: chartAreaHeight},
        hAxis: {
          title: 'Subtemas mais trabalhados',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }

    </script>
  </head>

  <body>
    <h1>Mostrar os subtemas mais trabalhados entre as orgs/iniciativas mapeadas.</h1>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>