@extends('admin.layouts.admin')

@section('title')
    <title>Trang Chủ</title>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card" style="background-color:#B5EAD7">
                       <div class="card-body">
                        <h5 class="card-title">Tổng Tiền Sản Phẩm</h5>
                          <div class="text-center">
                            <p>
                             <h2>
                                <span class="count-up-wrapper-4">{{$price}} </span>
                             </h2>
                            </p>
                          </div>
                       </div>
                    </div>
                 </div>
                <div class="col-lg-6">
                   <div class="main-card mb-3 card" style="background-color:#FFDFD3">
                      <div class="card-body">
                         <h5 class="card-title">Sản Phẩm Đắt Nhất</h5>
                         <div class="text-center">
                            @foreach ($sanpham_bdsmax as $key)

                            <h3>
                               <span class="count-up-wrapper-4">{{$key->tensp}} : {{$max}} </span>
                            </h3>
                            @endforeach

                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3">
                    <div class="main-card mb-3 card" style="background-color:#FEC8D8">
                       <div class="card-body">
                          <h5 class="card-title">Sản Phẩm Hiện Có :</h5>
                          <div class="text-center">
                             <h3>
                                <span class="count-up-wrapper-4">{{$sanpham_count}} </span>
                             </h3>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3">
                    <div class="main-card mb-3 card" style="background-color:#E2F0CB">
                       <div class="card-body">
                          <h5 class="card-title">Khách Hàng Hiện Có :</h5>
                          <div class="text-center">
                             <h3>
                                <span class="count-up-wrapper-4">{{$khachhang_count}} </span>
                             </h3>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="main-card mb-3 card" style="background-color:#C7CEEA">
                       <div class="card-body">
                          <h5 class="card-title">Sản Phẩm Rẻ Nhất</h5>
                          <div class="text-center">
                             @foreach ($sanpham_bdsmin as $key)
                             <h3>
                                <span class="count-up-wrapper-4">{{$key->tensp}} : {{$min}} </span>
                             </h3>
                             @endforeach

                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-8">
                    <div class="main-card mb-3 card" style="background-color:#D7D7D7">
                       <div class="card-body">
                          <h5 class="card-title">Tổng Tiền Phiếu Thu :</h5>
                          <div class="text-center">
                             {{-- @foreach ($sanpham_bdsmin as $key) --}}
                             <h3>
                                <span class="count-up-wrapper-4">{{$phieuthuprice}}</span>
                             </h3>
                             {{-- @endforeach --}}

                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="main-card mb-3 card" style="background-color:#AFD6F7">
                       <div class="card-body">
                          <h5 class="card-title">Tổng Số Phiếu Thu Hiện Có :</h5>
                          <div class="text-center">
                             <h3>
                                <span class="count-up-wrapper-4">{{$phieuthu_count}} </span>
                             </h3>
                          </div>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-6">
                  <!-- DONUT CHART -->
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Sản Phẩm Theo Loại</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                        <h6>Hiện Đang Có : {{$sanpham_count}} Sản Phẩm</h6>
                      <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  <!-- PIE CHART -->
                  <div class="card card-danger">
                    <div class="card-header"style="background-color:#5F9EA1">
                      <h3 class="card-title">Khách Hàng Theo Loại Khách</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body"style="background-color:#BDE6D6">
                        <h6>Hiện Đang Có : {{$khachhang_count}} Khách</h6>
                      <canvas id="pieChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <div class="card card-danger">
                    <div class="card-header"style="background-color:#5F9EA1">
                      <h3 class="card-title">Sản Phẩm Theo Dự Án</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body"style="background-color:#BDE6D6">
                        <h6>Hiện Đang Có : {{$sanpham_count}} Sản Phẩm</h6>
                      <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-6">

                    <div class="card card-danger">
                        <div class="card-header"style="background-color:#5F9EA1">
                          <h3 class="card-title">Sản Phẩm Theo Dự Án</h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body"style="background-color:#BDE6D6">
                            <h6>Hiện Đang Có : {{$sanpham_count}} Sản Phẩm</h6>
                          <canvas id="pieChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                      </div>
                  <!-- BAR CHART -->
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Bar Chart</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart">
                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  <!-- STACKED BAR CHART -->
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Stacked Bar Chart</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart">
                        <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                </div>
                <!-- /.col (RIGHT) -->
              </div>
            </div>

    </div>

</div>

<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js')}}"></script>
<script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */
      var areaChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label               : 'Digital Goods',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
          },
          {
            label               : 'Electronics',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
          },
        ]
      }
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.

      @foreach($tenloaisp_1 as $row )
      @foreach($tenloaisp_2 as $riw )
      @foreach($tenloaisp_3 as $raw )
      @foreach($tenloaisp_4 as $rew )
      @foreach($tenloaisp_5 as $rzw )
      @foreach($tenloaisp_6 as $rfw )
      @foreach($tenloaisp_7 as $rbw )
      @foreach($tenloaisp_8 as $ruw )
      @foreach($tenloaisp_9 as $rvw )
      var loaispData = {
        labels: ['{{$row->tenloai}}','{{$riw->tenloai}}','{{$raw->tenloai}}','{{$rew->tenloai}}','{{$rzw->tenloai}}','{{$rfw->tenloai}}','{{$rbw->tenloai}}','{{$ruw->tenloai}}','{{$rvw->tenloai}}',

        ],
        datasets: [
          {
            data: [{{$masp_1}},{{$masp_2}},{{$masp_3}},{{$masp_4}},{{$masp_5}},{{$masp_6}}{{$masp_7}},{{$masp_8}},{{$masp_9}},{{$masp_10}}],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#E784B5', ' #4D298F', '#EA3636', '#EA3636'],
          }
        ]
      }
      @endforeach
      @endforeach
      @endforeach
      @endforeach
      @endforeach
      @endforeach
      @endforeach
      @endforeach
      @endforeach


      @foreach($tenloaikhach_1 as $row )
      @foreach($tenloaikhach_2 as $riw )
      @foreach($tenloaikhach_3 as $raw )
      var khachhangData=
       {
        labels: ['{{$row->tenloai}}','{{$riw->tenloai}}','{{$raw->tenloai}}'

        ],

        datasets: [
          {
            data: [{{$maloaikhach_1}},{{$maloaikhach_2}},{{$maloaikhach_3}},{{$maloaikhach_4}},{{$maloaikhach_5}},{{$maloaikhach_6}}],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      @endforeach
      @endforeach
      @endforeach

      @foreach($tenduan_1 as $row )
      @foreach($tenduan_2 as $riw )
      var duanData=
       {
        labels: ['{{$row->tenduan}}','{{$riw->tenduan}}'

        ],

        datasets: [
          {
            data: [{{$maduan_1}},{{$maduan_2}},{{$maduan_3}},{{$maduan_4}},{{$maduan_5}},{{$maduan_6}}],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      @endforeach
      @endforeach

      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: loaispData,
        options: donutOptions
      })

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
      var pieData        = pieData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(pieChartCanvas, {
        type: 'pie',
        data: khachhangData,
        options: pieOptions
      })

      var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
      var pieData        = pieData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(pieChartCanvas, {
        type: 'pie',
        data: duanData,
        options: pieOptions
      })
      var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
      var pieData        = pieData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(pieChartCanvas, {
        type: 'pie',
        data: loaispData,
        options: pieOptions
      })

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0

      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = $.extend(true, {}, barChartData)

      var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

      new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })
    })
  </script>
@endsection

