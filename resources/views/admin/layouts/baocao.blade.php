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
                                <span class="count-up-wrapper-4">{{number_format($price)}} </span>
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
                               <span class="count-up-wrapper-4">{{$key->tensp}} : {{number_format($max)}} </span>
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
                                <span class="count-up-wrapper-4">{{$key->tensp}} : {{number_format($min)}} </span>
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
                                <span class="count-up-wrapper-4">{{number_format($phieuthuprice)}}</span>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Khách Hàng Theo Loại Khách</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <div id="khachtheoloaikhach" style="min-height: 370px; height: 370px; max-height: 370px; max-width: 2000%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Tin Tức Theo Loại Tin Tin Tức </h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <div id="tintuctheoloai" style="min-height: 370px; height: 370px; max-height: 370px; max-width: 2000%;"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Sản Phẩm Theo Loại</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <div id="sanphamtheoloai" style="min-height: 370px; height: 370px; max-height: 370px; max-width: 2000%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Sản Phẩm Theo Dự Án</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <div id="sanphamtheoduan" style="min-height: 370px; height: 370px; max-height: 370px; max-width: 2000%;"></div>
                            </div>
                        </div>
                    </div>

                <!-- /.col (RIGHT) -->
                    <form action={{route('baocao.filter')}} method="POST">
                        @csrf
              <h3>Từ ngày:</h3>
              <input type="date" name="ngaybatdau" class="form-control"  value="">
              <h3>Đến ngày:</h3>
              <input type="date" name="ngayketthuc" class="form-control"  value="">

                 <button class="btn btn-success btn-sm" type="submit">Lọc</button>
                 </form>
{{--                    <div>--}}
{{--                        Số sản phẩm đã đăng lên web: <span style="font-size: 12pt; color: red;"><strong>{{$soluong}}</strong></span>--}}
{{--                    </div>--}}
                    <div class="col-lg-12">
                        <div class="main-card mb-3 card" style="background-color:#FEC8D8">
                            <div class="card-body">
                                <h5 class="card-title">Sản Phẩm Hiện Có :</h5>
                                <div class="text-center">
                                    <h3>
                                        <span class="count-up-wrapper-4">{{$soluong      }} </span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="card card-danger">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">Sản Phẩm Theo Dự Án</h3>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="chart">--}}
{{--                                <div id="bieudodate" style="min-height: 370px; height: 370px; max-height: 370px; max-width: 2000%;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
            </div>
         </div>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js')}}"></script>

<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

<script type="text/javascript">

// Load google charts
google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(tenloaisp);
        function tenloaisp() {
            var data1 = google.visualization.arrayToDataTable([
                ['name', 'count'],
      @foreach ($sploaisp1 as $r )
                ['{{$r["name"]}}', {{$r["total"]}}],
      @endforeach

            ]);
            var options = {
            'is3D':true,
            'pieSliceText':'value',}
            var chart = new google.visualization.PieChart(document.getElementById('sanphamtheoloai'));
            chart.draw(data1, options);
        }


google.charts.load('current', {
    'packages': ['corechart']
});
{{--google.charts.setOnLoadCallback(date);--}}
{{--function date() {--}}
{{--    var data1 = google.visualization.arrayToDataTable([--}}
{{--        ['name', 'count'],--}}
{{--            @foreach ($product as $r )--}}
{{--        ['{{$r["tensp"]}}', {{$r["id"]}}],--}}
{{--            @endforeach--}}
{{--        --}}{{--['{{$name}}', {{$ngaybatdau}},{{$ngayketthuc}}],--}}


{{--    ]);--}}
{{--    var options = {--}}
{{--        'is3D':true,--}}
{{--        'pieSliceText':'value',}--}}
{{--    var chart = new google.visualization.BarChart(document.getElementById('bieudodate'));--}}
{{--    chart.draw(data1, options);--}}
{{--}--}}

google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(tenduan);
        function tenduan() {
            var data2 = google.visualization.arrayToDataTable([
                ['name', 'count'],
      @foreach ($spduan1 as $r )
                ['{{$r["name"]}}', {{$r["total"]}}],
      @endforeach

            ]);
            var options = {
            'is3D':true,
            'pieSliceText':'value',}
            var chart = new google.visualization.PieChart(document.getElementById('sanphamtheoduan'));
            chart.draw(data2, options);
        }


google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(tenloaikhach);
        function tenloaikhach() {
            var data3 = google.visualization.arrayToDataTable([
                ['name', 'count'],
      @foreach ($khachloaikhach1 as $r )
                ['{{$r["name"]}}', {{$r["total"]}}],
      @endforeach

            ]);
            var options = {
            'is3D':true,
            'pieSliceText':'value',}
            var chart = new google.visualization.PieChart(document.getElementById('khachtheoloaikhach'));
            chart.draw(data3, options);
        }

google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(tenloaitintuc);
        function tenloaitintuc() {
            var data4 = google.visualization.arrayToDataTable([
                ['name', 'count'],
      @foreach ($tintuctheoloai1 as $r )
                ['{{$r["name"]}}', {{$r["total"]}}],
      @endforeach

            ]);
            var options = {
            'is3D':true,
            'pieSliceText':'value',}
            var chart = new google.visualization.PieChart(document.getElementById('tintuctheoloai'));
            chart.draw(data4, options);
        }
  </script>

<script>
    Morris.Bar({
        element: 'chart',
        data: [
            { date: '04-02-2014', value: 3 },
            { date: '04-03-2014', value: 10 },
            { date: '04-04-2014', value: 5 },
            { date: '04-05-2014', value: 17 },
            { date: '04-06-2014', value: 6 }
        ],
        xkey: 'date',
        ykeys: ['value'],
        labels: ['Orders']
    });
</script>

<script>
    $(function() {

        // Create a function that will handle AJAX requests
        function requestData(days, chart){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./api", // This is the URL to the API
                data: { days: days }
            })
                .done(function( data ) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function() {
                    // If there is no communication between the server, show an error
                    alert( "error occured" );
                });
        }

        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Orders'] // Set the label when bar is rolled over
        });

        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function(e){
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');

            // Request the data and render the chart using our handy function
            requestData(days, chart);
        })
    });
</script>
@endsection

