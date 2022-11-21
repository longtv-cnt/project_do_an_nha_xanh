@extends('admin.layouts.admin')

@section('title')
    <title>Trang Chủ</title>
@endsection

@section('content')
<div class="content-wrapper" style="background-color:#E4F7EC">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0"></h1>
            </div>
            <!-- /.col -->

            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
      <div class="container-fluid" >
         <div class="row">
            <div class="col-lg-3 col-6" >
                <div  class="small-box bg"  style="background-color:#ffc2fe">
                   <div class="inner">
                      <h1>{{ $khachhang_count }}</h1>
                      <h2>Khách Hàng</h2>
                   </div>
                   <div class="icon">
                      <i class="fa fa-users"></i>
                   </div>
                   <a href="{{route('khachhang')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
                </div>
             </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg" style="background-color:#3383ff">
                  <div class="inner">
                     <h1>{{ $phanhoi_count }}</h1>
                     <h2>Phản Hồi </h2>
                  </div>
                  <div class="icon">
                     <i class="fa fa-comment"></i>
                  </div>
                  <a href="{{route('phanhoi')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg"  style="background-color:#f6c2b7">
                  <div class="inner">
                     <h1>{{ $phieuthu_count }}</h1>
                     <h2>Phiếu Thu </h2>
                  </div>
                  <div class="icon">
                     <i class="fas fa-file-powerpoint"></i>
                  </div>
                  <a href="{{route('phieuthu')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg" style="background-color:#f57c63">
                  <div class="inner">
                     <h1>{{ $tintuc_count }}<sup style="font-size: 20px"></sup></h1>
                     <h2>Tin Tức</h2>
                  </div>
                  <div class="icon">
                     <i class="fa fa-newspaper"></i>
                  </div>
                  <a href="{{route('tintuc')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg" style="background-color:#a9f3d4" >
                  <div class="inner">
                     <h1>{{$sanpham_count}}</h1>
                     <h2>Sản Phẩm</h2>
                  </div>
                  <div class="icon">
                     <i class="fas fa-server"></i>
                  </div>
                  <a href="{{route('sanpham_bds')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg" style="background-color:#fadd7b">
                  <div class="inner">
                     <h1>{{$duan_count}}</h1>
                     <h2>Dự Án</h2>
                  </div>
                  <div class="icon">
                     <i class="fab fa-buffer"></i>
                  </div>
                  <a href="{{route('duan')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg" style="background-color:#05dbf2   ">
                   <div class="inner">
                      <h1>{{$contact_count}}</h1>
                      <h2>Contact</h2>
                   </div>
                   <div class="icon">
                      <i class="fa fa-phone"></i>
                   </div>
                   <a href="{{route('contact')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
                </div>
             </div>
             <div class="col-lg-3 col-6">
                <div class="small-box bg" style="background-color:#f24444">
                   <div class="inner">
                      <h1>{{$banners_count}}</h1>
                      <h2>Banners</h2>
                   </div>
                   <div class="icon">
                      <i class="fa fa-align-center"></i>
                   </div>
                   <a href="{{route('banners')}}" class="small-box-footer" style="font-size: 18px">Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
                </div>
             </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <div class="container-fluid" >
        <div class="row">
           <div class="col-md-6" >
              <div class="card">
                 <div class="card-header" style="background-color:#a9f3d4">
                    <h3 class="card-title">Sản Phẩm Chưa Xét Duyệt</h3>
                 </div>
                 <div class="card-body" style="background-color:#b5ddd1">
                    <table class="table table-bordered">
                       <thead>
                          <tr>
                             <th>Tên Sản Phẩm</th>
                             <th>Tên Dự Án</th>
                             <th>Giá Tiền</th>
                             <th>Địa Chỉ </th>
                          </tr>
                       </thead>
                       <tbody>
                        @foreach ($sanpham_bds as $row)
                          <tr>
                             <td>{{$row->tensp}}</td>
                             <td>{{$row->tenduan}}</td>
                             <td>{{number_format($row->giatien)}}</td>
                             <td>{{$row->diachi}}</td>
                          </tr>
                       </tbody>
                       @endforeach
                    </table>
                 </div>
                 <div class="card-footer clearfix" style="background-color:#b5ddd1">
                    <ul class="pagination pagination-sm m-0 float-left">
                        <a href="{{route('sanpham_bds')}}" class="btn btn" style="background-color:#a9f3d4">Chi Tiết</a>
                    </ul>
                 </div>
              </div>
              <div class="card">
                 <div class="card-header" style="background-color:#fadd7b">
                    <h3 class="card-title">Dự Án Hiện Có</h3>
                 </div>
                 <div class="card-body p-0" style="background-color:#f3ddb3">
                    <table class="table table-sm">
                       <thead>
                          <tr>
                             <th>Tên Dự Án</th>
                             <th>Chủ Đầu Tư</th>
                             <th>Vị Trí</th>
                             <th>Sản Phẩm</th>
                          </tr>
                       </thead>
                       <tbody>
                        @foreach ($duan as $d)
                          <tr>
                             <td>{{$d->tenduan}}</td>
                             <td>{{$d->chudautu}}</td>
                             <td>{{$d->vitri}}</td>
                             <td>{{$d->dientich}} ha</td>
                          </tr>
                           @endforeach
                       </tbody>
                    </table>
                 </div>
                 <div class="card-footer clearfix" style="background-color:#f3ddb3">
                    <ul class="pagination pagination-sm m-0 float-left">
                        <a href="{{route('duan')}}" class="btn btn" style="background-color:#fadd7b">Chi Tiết</a>
                    </ul>
                 </div>
              </div>
           </div>
           <div class="col-md-6">
              <div class="card">
                 <div class="card-header" style="background-color:#f6c2b7">
                    <h3 class="card-title">Phiếu Thu</h3>
                 </div>
                 <div class="card-body p-0" style="background-color:#ffdce3">
                    <table class="table">
                       <thead>
                          <tr>
                             <th>Lý Do</th>
                             <th>Số Tiền Nộp</th>
                             <th>Tên Khách</th>
                             <th>Thời Gian</th>
                          </tr>
                       </thead>
                       <tbody>
                        @foreach ($phieuthu as $p)
                          <tr>
                             <td>{{$p->lydo}}</td>
                             <td>{{number_format($p->sotiennop)}}</td>
                             <td>{{$p->tenkhach}}</td>
                             <td>{{$p->ngaytao}}</td>
                          </tr>
                        @endforeach
                       </tbody>
                    </table>
                 </div>
                 <div class="card-footer clearfix" style="background-color:#ffdce3">
                    <ul class="pagination pagination-sm m-0 float-left">
                        <a href="{{route('phieuthu')}}" class="btn btn" style="background-color:#f6c2b7">Chi Tiết</a>
                    </ul>
                 </div>
              </div>
              <div class="card">
                 <div class="card-header" style="background-color:#3383ff">
                    <h3 class="card-title">Phản Hồi</h3>
                 </div>
                 <div class="card-body p-0" style="background-color:#D7EDFA">
                    <table class="table">
                       <thead>
                          <tr>
                             <th>Tên</th>
                             <th>Sản Phẩm</th>
                             <th>Comment</th>
                             <th>Thời Gian</th>
                          </tr>
                       </thead>
                       @foreach ($phanhoi as $key )
                       <tbody>
                          <tr>
                             <td>{{$key->name}}</td>
                             <td>{{$key->tensp}}</td>
                             <td>{{$key->comment}}</td>
                             <td>{{$key->ngaytao}}</td>
                          </tr>
                       </tbody>
                       @endforeach
                    </table>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-left">
                            <a href="{{route('phanhoi')}}" class="btn btn" style="background-color:#3383ff">Chi Tiết</a>
                        </ul>
                     </div>
                 </div>
              </div>
           </div>
        </div>

     </div>
   </div>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection








