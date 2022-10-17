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
               <h1 class="m-0">Starter Page</h1>
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
                <div  class="small-box bg-primary" >
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
               <div class="small-box bg-info">
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
               <div class="small-box bg-secondary">
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
               <div class="small-box bg-success">
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
               <div class="small-box bg-warning">
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
               <div class="small-box bg-danger">
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
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <div class="container-fluid" >
        <div class="row">
           <div class="col-md-6" >
              <div class="card">
                 <div class="card-header" style="background-color:#FCEAAF">
                    <h3 class="card-title">Sản Phẩm Chưa Xét Duyệt</h3>
                 </div>
                 <div class="card-body" style="background-color:#FFECCF">
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
                             <td>{{$row->giatien}}</td>
                             <td>{{$row->diachi}}</td>
                          </tr>
                       </tbody>
                       @endforeach
                    </table>
                 </div>
                 <div class="card-footer clearfix" style="background-color:#F7F4EE">
                    {{-- <ul class="pagination pagination-sm m-0 float-right">
                       <li class="page-item"><a class="page-link" href="#">«</a></li>
                       <li class="page-item"><a class="page-link" href="#">1</a></li>
                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                       <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul> --}}
                    <ul class="pagination pagination-sm m-0 float-left">
                        <a href="{{route('sanpham_bds')}}" class="btn btn-success">Chi Tiết</a>
                    </ul>
                 </div>
              </div>
              <div class="card">
                 <div class="card-header">
                    <h3 class="card-title">Condensed Full Width Table</h3>
                 </div>
                 <div class="card-body p-0">
                    <table class="table table-sm">
                       <thead>
                          <tr>
                             <th style="width: 10px">#</th>
                             <th>Task</th>
                             <th>Progress</th>
                             <th style="width: 40px">Label</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>1.</td>
                             <td>Update software</td>
                             <td>
                                <div class="progress progress-xs">
                                   <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-danger">55%</span></td>
                          </tr>
                          <tr>
                             <td>2.</td>
                             <td>Clean database</td>
                             <td>
                                <div class="progress progress-xs">
                                   <div class="progress-bar bg-warning" style="width: 70%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-warning">70%</span></td>
                          </tr>
                          <tr>
                             <td>3.</td>
                             <td>Cron job running</td>
                             <td>
                                <div class="progress progress-xs progress-striped active">
                                   <div class="progress-bar bg-primary" style="width: 30%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-primary">30%</span></td>
                          </tr>
                          <tr>
                             <td>4.</td>
                             <td>Fix and squish bugs</td>
                             <td>
                                <div class="progress progress-xs progress-striped active">
                                   <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-success">90%</span></td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
           <div class="col-md-6">
              <div class="card">
                 <div class="card-header">
                    <h3 class="card-title">Simple Full Width Table</h3>
                    <div class="card-tools">
                       <ul class="pagination pagination-sm float-right">
                          <li class="page-item"><a class="page-link" href="#">«</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">»</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="card-body p-0">
                    <table class="table">
                       <thead>
                          <tr>
                             <th style="width: 10px">#</th>
                             <th>Task</th>
                             <th>Progress</th>
                             <th style="width: 40px">Label</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>1.</td>
                             <td>Update software</td>
                             <td>
                                <div class="progress progress-xs">
                                   <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-danger">55%</span></td>
                          </tr>
                          <tr>
                             <td>2.</td>
                             <td>Clean database</td>
                             <td>
                                <div class="progress progress-xs">
                                   <div class="progress-bar bg-warning" style="width: 70%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-warning">70%</span></td>
                          </tr>
                          <tr>
                             <td>3.</td>
                             <td>Cron job running</td>
                             <td>
                                <div class="progress progress-xs progress-striped active">
                                   <div class="progress-bar bg-primary" style="width: 30%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-primary">30%</span></td>
                          </tr>
                          <tr>
                             <td>4.</td>
                             <td>Fix and squish bugs</td>
                             <td>
                                <div class="progress progress-xs progress-striped active">
                                   <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                             </td>
                             <td><span class="badge bg-success">90%</span></td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
              </div>
              <div class="card">
                 <div class="card-header" style="background-color:#C8E0FD">
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
                            <a href="{{route('phanhoi')}}" class="btn btn-success">Chi Tiết</a>
                        </ul>
                     </div>
                 </div>
              </div>
           </div>
        </div>
        @foreach ( $sanpham_bds as $row )
        <div class="col-12">
            <div class="card card-primary">
               <div class="card-header">
                  <h4 class="card-title">{{$row->tensp}}</h4>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample">
                        </a>
                     </div>
                     <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                        <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach

     </div>
   </div>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection








