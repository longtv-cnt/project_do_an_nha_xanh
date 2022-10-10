<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 @yield("title")

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include("admin.partials.header")
@include("admin.partials.sidebar")
@yield("content")
@include("admin.partials.footer")
</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
{{-- <script src="{{ Html::script('https://code.jquery.com/jquery-3.1.1.min.js') }}">
<script src="{{ Html::script('https://code.highcharts.com/highcharts.js') }}">
<script src="{{ Html::script('https://code.highcharts.com/modules/exporting.js') }}">
<script src="{{ Html::script('https://code.highcharts.com/modules/export-data.js') }}"> --}}
</body>
</html>
