@extends('admin.layouts.admin')
@section('title')
    <title>Sản Phẩm Bất Động Sản</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Sản Phẩm Bất Động Sản</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Sản Phẩm
                    </th>
                    <th>
                        Mã Loại
                    </th>
                    <th>
                        Tên Sản Phẩm
                    </th>
                    <th>
                        Giá Tiền
                    </th>
                    <th>
                        Ảnh Sản Phẩm
                    </th>
                    <th>
                        Hướng
                    </th>
                    <th>
                        Chiều Dài
                    </th>
                    <th>
                        Chiều Rộng
                    </th>
                    <th>
                        Số Phòng Tắm
                    </th>
                    <th>
                        Số Phòng Ngủ
                    </th>
                    <th>
                        Xét Duyệt
                    </th>
                    <th>
                        Tình Trạng
                    </th>
                    <th>
                        Mã Dự Án
                    </th>
                    <th>
                        Địa Chỉ
                    </th>
                    <th>
                        Nhà Xanh
                    </th>
                </tr>
            </thead>
            <form action={{route('sanpham_bds.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="masanpham" class="form-control" placeholder="Nhập Mã Sản Phẩm" value="">
                </td>
                <td>
                    <input type="text" name="maloai" class="form-control" placeholder="Nhập Mã Loại Sản Phẩm" value="">
                </td>
                <td>
                    <input type="text" name="tensp"class="form-control" placeholder="Nhập Tên Sản Phẩm" value="">
                </td>
                <td>
                    <input type="text" name="giatien" class="form-control" placeholder="Nhập Giá Tiền"value="">
                </td>
                <td>
                    <input type="text" name="anhsp" class="form-control" placeholder="Tải Ảnh"value="">
                </td>
                <td>
                    <input type="text" name="huong" class="form-control" placeholder="Nhập Hướng"value="">
                </td>
                <td>
                    <input type="text" name="chieudai" class="form-control" placeholder="Nhập Chiều Dài"value="">
                </td>
                <td>
                    <input type="text" name="chieurong" class="form-control" placeholder="Nhập Chiều Rộng"value="">
                </td>
                <td>
                    <input type="text" name="sophongtam" class="form-control" placeholder="Nhập Số Phòng Tắm"value="">
                </td>
                <td>
                    <input type="text" name="sophongngu" class="form-control" placeholder="Nhập Số Phòng Ngủ"value="">
                </td>
                <td>
                    <input type="text" name="xetduyet" class="form-control" placeholder="Xét Duyệt"value="">
                </td>
                <td>
                    <input type="text" name="tinhtrang" class="form-control" placeholder="Nhập Tình Trạng"value="">
                </td>
                <td>
                    <input type="text" name="maduan" class="form-control" placeholder="Nhập Mã Dự Án"value="">
                </td>
                <td>
                    <input type="text" name="diachi" class="form-control" placeholder="Nhập Địa Chỉ"value="">
                </td>
                <td>
                    <input type="text" name="nhaxanh" class="form-control" placeholder="Nhà Xanh"value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Sản Phẩm</button>
                </td>

            </tbody>

            </form>
        </table>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Sản Phẩm
                    </th>
                    <th>
                        Mã Loại
                    </th>
                    <th>
                        Tên Sản Phẩm
                    </th>
                    <th>
                        Giá Tiền
                    </th>
                    <th>
                        Ảnh Sản Phẩm
                    </th>
                    <th>
                        Hướng
                    </th>
                    <th>
                        Chiều Dài
                    </th>
                    <th>
                        Chiều Rộng
                    </th>
                    <th>
                        Số Phòng Tắm
                    </th>
                    <th>
                        Số Phòng Ngủ
                    </th>
                    <th>
                        Xét Duyệt
                    </th>
                    <th>
                        Tình Trạng
                    </th>
                    <th>
                        Mã Dự Án
                    </th>
                    <th>
                        Địa Chỉ
                    </th>
                    <th>
                        Nhà Xanh
                    </th>
                    <th>
                        Công Cụ
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($sanpham_bds as $row)
                <tr>
                        <td>{{$row->masanpham}}</td>
                        <td>{{$row->maloai}}</td>
                        <td>{{$row->tensp}}</td>
                        <td>{{$row->giatien}}</td>
                        <td>{{$row->anhsp}}</td>
                        <td>{{$row->huong}}</td>
                        <td>{{$row->chieudai}}</td>
                        <td>{{$row->chieurong}}</td>
                        <td>{{$row->sophongtam}}</td>
                        <td>{{$row->sophongngu}}</td>
                        <td>{{$row->xetduyet}}</td>
                        <td>{{$row->tinhtrang}}</td>
                        <td>{{$row->maduan}}</td>
                        <td>{{$row->diachi}}</td>
                        <td>{{$row->nhaxanh}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning btn-sm" href="/sanpham_bds/edit/{{$row->masanpham}}">Edit</a>

                            <form method="POST" action="/sanpham_bds/destroy/{{$row->masanpham}}" onsubmit="return ConfirmDelete( this )">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm"  type="submit">Xóa</button>
                            </form>
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection


      </div>
