google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['State', 'Number'],
          ['Waiting for a order',     11],
          ['Resting',      2],
          ['Riding to the destination',  2],
          ['Riding to a customer', 2],
          ['Not avaliable',    7]
        ]);

        var options = {
          title: 'Employes',
          pieHole: 0.4,
          legend: { position: 'bottom' }
        };



        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }