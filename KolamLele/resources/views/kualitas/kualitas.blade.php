@extends('template/page')

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
@endsection
@section('title')
Kualitas Kolam
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kualitas Kolam</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item"><a href="/kualitas">Kualitas Kolam</a></li>
          @foreach ($kolam as $item)
          <li class="breadcrumb-item active">Kualitas {{$item->nama_kolam}}</li>              
          @endforeach
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-12 col-sm-6 col-md-9">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

        <div class="info-box-content">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
              <span class="info-box-text">Data Dari Kolam : {{$item->nama_kolam}}</span>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
              <span class="info-box-text">Kode Alat : {{$item->id_kolam}}</span>
            </div>
          </div>
          <span class="info-box-number">Waktu : <span id="lwaktu"></span></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-vial"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">pH</span>
          <span id="lph" class="info-box-number">
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-6 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thermometer-quarter"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Suhu 1</span>
          <span id="lsuhu1" class="info-box-number">
            <small>°C</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-6 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thermometer-quarter"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Suhu 2</span>
          <span id="lsuhu2"class="info-box-number">
            <small>°C</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-6 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thermometer-quarter"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Suhu 3</span>
          <span id="lsuhu3"class="info-box-number">
            <small>°C</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-6 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thermometer-quarter"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Suhu 4</span>
          <span id="lsuhu4" class="info-box-number">
            <small>°C</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-12">
      <!-- interactive chart -->
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title"><i class="far fa-chart-bar pr-2"></i>Kualitas {{$item->nama_kolam}}</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
            {{-- Real time
            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
              <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
            </div> --}}
          </div>
        </div>
        <div class="card-body table-responsive p-1">
          <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-three-pH-tab" data-toggle="pill" href="#custom-tabs-three-pH" role="tab" aria-controls="custom-tabs-three-pH" aria-selected="true">pH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-Suhu-tab" data-toggle="pill" href="#custom-tabs-three-Suhu" role="tab" aria-controls="custom-tabs-three-Suhu" aria-selected="false">Suhu</a>
            </li>
          </ul>
          <div class="tab-content" id="custom-tabs-three-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-three-pH" role="tabpanel" aria-labelledby="custom-tabs-three-pH-tab">
              <canvas id="ph"></canvas>
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-Suhu" role="tabpanel" aria-labelledby="custom-tabs-three-Suhu-tab">
              <canvas id="suhu"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>

@endsection


@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('lte/plugins/flot/jquery.flot.j')}}"></script>
<script src="{{asset('lte/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('lte/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('lte/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("ph");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [],
      datasets: [{
        label: 'pH',
        data: [],
        fill: true,
        backgroundColor:"rgba(70, 156, 241, 0.479)",
        borderColor:"rgb(0, 122, 243)",
        borderCapSttyle: "bolt",
        borderDash:[],
        borderDashOffset:0.0,
        borderJoinStyle:'miiter',
        pointBorderColor:"rgb(0, 122, 243)",
        pointBackgroundColor:"#fff",
        pointBorderWidth: 1,
        pointHoverRadius:5,
        pointHoverBackgroundColor:"rgb(0, 122, 243)",
        pointHoverBorderColor:"rgb(0, 122, 243)",
        pointHoverBorderWidth: 2,
        pointRadius:5,
        pointHitRadius:10,
      }]
    },
    options: {
      scales: {
        xAxes: [],
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
  var ctx2 = document.getElementById("suhu");
  var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
      labels: [],
      datasets: [
        {
        label: 'Suhu 1',
        data: [],
        fill: false,
        backgroundColor:"rgba(70, 156, 241, 0.479)",
        borderColor:"rgb(0, 122, 243)",
        borderCapSttyle: "bolt",
        borderDash:[],
        borderDashOffset:0.0,
        borderJoinStyle:'miiter',
        pointBorderColor:"rgb(0, 122, 243)",
        pointBackgroundColor:"#fff",
        pointBorderWidth: 1,
        pointHoverRadius:5,
        pointHoverBackgroundColor:"rgb(0, 122, 243)",
        pointHoverBorderColor:"rgb(0, 122, 243)",
        pointHoverBorderWidth: 2,
        pointRadius:5,
        pointHitRadius:10,
      },
      {
        label: 'Suhu 2',
        data: [],
        fill: false,
        backgroundColor:"rgba(70, 241, 135, 0.479)",
        borderColor:"rgb(0, 243, 53)",
        borderCapSttyle: "bolt",
        borderDash:[],
        borderDashOffset:0.0,
        borderJoinStyle:'miiter',
        pointBorderColor:"rgb(0, 243, 53)",
        pointBackgroundColor:"#fff",
        pointBorderWidth: 1,
        pointHoverRadius:5,
        pointHoverBackgroundColor:"rgb(0, 243, 53)",
        pointHoverBorderColor:"rgb(0, 243, 53)",
        pointHoverBorderWidth: 2,
        pointRadius:5,
        pointHitRadius:10,
      },
      {
        label: 'Suhu 3',
        data: [],
        fill: false,
        backgroundColor:"rgba(224, 241, 70, 0.479)",
        borderColor:"rgb(198, 243, 0)",
        borderCapSttyle: "bolt",
        borderDash:[],
        borderDashOffset:0.0,
        borderJoinStyle:'miiter',
        pointBorderColor:"rgb(198, 243, 0)",
        pointBackgroundColor:"#fff",
        pointBorderWidth: 1,
        pointHoverRadius:5,
        pointHoverBackgroundColor:"rgb(198, 243, 0)",
        pointHoverBorderColor:"rgb(198, 243, 0)",
        pointHoverBorderWidth: 2,
        pointRadius:5,
        pointHitRadius:10,
      },
      {
        label: 'Suhu 4',
        data: [],
        fill: false,
        backgroundColor:"rgba(241, 70, 121, 0.479)",
        borderColor:"rgb(243, 0, 93)",
        borderCapSttyle: "bolt",
        borderDash:[],
        borderDashOffset:0.0,
        borderJoinStyle:'miiter',
        pointBorderColor:"rgb(243, 0, 93)",
        pointBackgroundColor:"#fff",
        pointBorderWidth: 1,
        pointHoverRadius:5,
        pointHoverBackgroundColor:"rgb(243, 0, 93)",
        pointHoverBorderColor:"rgb(243, 0, 93)",
        pointHoverBorderWidth: 2,
        pointRadius:5,
        pointHitRadius:10,
      },
      ]
    },
    options: {
      scales: {
        xAxes: [],
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
  var updateChart = function() {
    $.ajax({
      url: "/api/chart/{{$item->id_kolam}}",
      type: 'GET',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
        $('#lwaktu').text(data.waktu[29]);
        $('#lph').text(data.ph[29]);
        $('#lsuhu1').text(data.suhu1[29]);
        $('#lsuhu2').text(data.suhu2[29]);
        $('#lsuhu3').text(data.suhu3[29]);
        $('#lsuhu4').text(data.suhu4[29]);
        myChart.data.labels = data.waktu;
        myChart.data.datasets[0].data = data.ph;
        myChart.update();
        myChart2.data.labels = data.waktu;
        myChart2.data.datasets[0].data = data.suhu1;
        myChart2.data.datasets[1].data = data.suhu2;
        myChart2.data.datasets[2].data = data.suhu3;
        myChart2.data.datasets[3].data = data.suhu4;
        myChart2.update();
      },
      error: function(data){
        console.log(data);
      }
    });
  }
  
  updateChart();
  setInterval(() => {
    updateChart();
  }, 1000);
</script>
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
        cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef',
        lines : {
          fill: true //Converts the line chart to area chart
        },
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Series2',
        data : 30,
        color: '#3c8dbc'
      },
      {
        label: 'Series3',
        data : 20,
        color: '#0073b7'
      },
      {
        label: 'Series4',
        data : 50,
        color: '#00c0ef'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#side-kualitas').addClass('active');
    $('#side-kolamku').addClass('menu-open');
    $('#side-kolamkuu').addClass('active');
  });
</script>
@endsection