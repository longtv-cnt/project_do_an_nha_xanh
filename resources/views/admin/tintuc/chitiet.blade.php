@extends('admin.layouts.admin')
@section('title')
    <title>Tin Tức</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">

            <h2 class="card-title"> {{ $tintuc->tentin}}  </h2>
    <div class="card-tools">
        <a onclick="return " class="btn btn-primary"
            href="{{route('tintuc')}}">
            Quay về</a>
    </div>
      </div>

      <h4 >Thể Loại tin tức:  {{$tintuc->loaitintuc->tenloai}}  </h4>

      <h5>Mã Người Đăng {{$tintuc->manguoidang}}</h5>
      <p> Đăng lúc : {{$tintuc->ngaydang}}</p>
      <div class="card-body p-0" >
        <h6 style="text-align:center">{!! $tintuc->noidung !!}</h6>

      </div>

    </div>
    <!-- /.card -->
    </div>
  </section>
 @endsection
