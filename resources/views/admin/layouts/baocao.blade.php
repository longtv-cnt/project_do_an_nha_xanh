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
              </div>
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
@endsection

