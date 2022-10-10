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
        </div>
    </div>

</div>
@endsection
