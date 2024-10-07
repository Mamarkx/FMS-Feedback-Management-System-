@extends('layout.index')

@section("content")

  <input type="checkbox" name="" id="sidebar-toggle">
 
 @include('layout.sidebar')
  <div class="main-content">

      @include('layout.header')

         <main >
    <nav aria-label="breadcrumb margin-left-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a class="a" href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Report</li>
  </ol>
</nav>
<div class="container mt-3">
    <h1 class="mb-4 text-center">Feedback Report</h1>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="chart-container" style="position: relative; width: 100%; height: 0; padding-bottom: 75%; overflow: hidden;">
                        <div id="piechart_3d" style="position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="chart-container" style="position: relative; width: 100%; height: 0; padding-bottom: 75%; overflow: hidden;">
                        <div id="barchart" style="position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 </main>
   </div>
   
     <label for="sidebar-toggle" class="body-label"></label>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        drawPieChart();  // Draw Pie Chart based on experience count
        drawBarChart();  // Optionally, draw Bar Chart as well
    }

    // Pie chart for Experience categories
    function drawPieChart() {
        var data = google.visualization.arrayToDataTable([
            ['Experience', 'Count'],
            @foreach($experienceData as $row)
                ['{{ $row->Experience }}', {{ $row->count }}],
            @endforeach
        ]);

        var options = {
            title: 'Rate of Experience',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }

    // Optional: Draw a Bar chart to show the same data
    function drawBarChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Experience');
        data.addColumn('number', 'Count');

        @foreach($experienceData as $row)
            data.addRow(['{{ $row->Experience }}', {{ $row->count }}]);
        @endforeach

        var options = {
            title: 'Experience Categories Count',
            hAxis: {title: 'Experience'},
            vAxis: {title: 'Count'},
            legend: {position: 'none'},
            bars: 'vertical'
        };

        var chart = new google.visualization.BarChart(document.getElementById('barchart'));
        chart.draw(data, options);
    }
</script>


     @endsection