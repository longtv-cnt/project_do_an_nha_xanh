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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
    @yield("css")

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include("admin.partials.header")
@include("admin.partials.sidebar")
@yield("content")
@include("admin.partials.footer")
</div>
<script src="{{ asset('resources\js\baocao.js')}}"></script>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript">

    $('file').change(function() {
        var error ='';
        var files = $('file')[0].files;

        if(files.length > 10) {
            error+='<p>Chỉ được chọn tối đa 10 ảnh</p>';
        }
        eles if(files.length ==''){
            error+='<p>Không Được Bỏ Trống</p>';
        }
        else if(files.size >10000000){
            error+='<p>Ảnh Quá Lớn</p>';
        }

        if(error ==''){
            $('#files'),val('');
            $('#error_gallery').html('<span class="text-danger">error</span>');
            return false;
        }

    });
</script>
<div>
    
    @yield("script")
</div>

</body>
</html>
