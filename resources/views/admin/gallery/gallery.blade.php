@extends('admin.layouts.admin')
@section('title')
    <title>Gallery</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Gallery</h3>
      </div>
      <form action="{{url('/insert-gallery',$sanpham_id)}}" method="POST" enctype="multipart/form-data">
        {{-- <form method="post" action="/loaitintuc/update/{{ $loaitintuc->id }}">"/insert-gallery,{{$sanpham_id}}"
            <form action={{route('loaiquyenhan.store')}} method="POST" > --}}
        @csrf
      <div class="row">

        <div class="col-md-6">
            <input type="file" class="form-control" id="file"  name="image" accept="image/*" multiple>
            <span id="error_gallery "></span>
        </div>
        <div class="col-md-3">

            <input type="text" name="sanpham_id" class="form-control" placeholder="Nhập Mã Sản Phẩm " value="">
            <input type="text" name="id" class="form-control" placeholder="Nhập Mã " value="">
        </div>
        <div class="col-md-3">
            <input type="submit" name="upload" name="taianh" value="Tải Ảnh" class="btn btn-success">
        </div>
      </div>

    </form>
      @foreach ( $gallery as $row )
      <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                  <h4 class="card-title">{{$row->sanpham_id}}</h4>
              </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-2">
                              @if (file_exists(public_path('store/' . $row->image)))
                            <img class="card-img" src="{{ 'store/'.$row->image }}" alt="" height="150px">
                        @else
                            <img class="card-img"  src="{{ $row->image }}" alt="" height="150px">
                        @endif
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
         </div>
        @endforeach
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection
