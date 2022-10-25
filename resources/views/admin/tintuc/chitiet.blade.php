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

            <h2 class="card-title">Chi tiết tin tức số: {{ $chitiet->id}}  </h2>
    <div class="card-tools">
        <a onclick="return " class="btn btn-primary"
            href="{{route('tintuc')}}">
            Quay về</a>
    </div>
      </div>
      @foreach ($tintuc as $row )
      <h4 >Thể Loại tin tức:  {{$row->tenloai}}  </h4>
      @endforeach
      <h5>Mã Người Đăng {{$chitiet->manguoidang}}</h5>
      <p> Đăng lúc : {{$chitiet->ngaydang}}</p>
      <div class="card-body p-0" >
        <h6 style="text-align:center">{{$chitiet->noidung}}</h6>

      </div>

    </div>
    <!-- /.card -->
    </div>
  </section>
 @endsection
