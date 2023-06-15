google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Income', 'Expenses'],
          ['Jan',  1000,      400],
          ['Feb',  1170,      460],
          ['March',  660,       1120],
          ['April',  1030,      540],
          ['May',  660,       1120],
          ['June',  660,       1120],
          ['July',  660,       1120],
          ['Aug',  660,       1120],
          ['Sept',  660,       1120],
          ['Oct',  660,       1120],
          ['Nove',  660,       1120],
          ['Dec',  660,       1120]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }