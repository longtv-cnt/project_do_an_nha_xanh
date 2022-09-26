@extends('admin.layouts.admin')
@section('title')
    <title>Khách Hàng</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Khách Hàng</h3>
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/sanpham_bds/update/{{ $sanpham_bds->masanpham }}">
                    @method('PATCH')
                    @csrf
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

                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="masanpham" value="{{ $sanpham_bds->masanpham }}">
                        <td>
                            <input type="text" name="masanpham" value="{{ $sanpham_bds->masanpham }}">
                        </td>
                        <td>
                            <input type="text" name="maloai" value="{{ $sanpham_bds->maloai }}">
                        </td>
                        <td>
                            <input type="text" name="tensp" value="{{ $sanpham_bds->tensp }}">
                        </td>
                        <td>
                            <input type="text" name="giatien" value="{{ $sanpham_bds->giatien }}">
                        </td>
                        <td>
                            <input type="text" name="anhsp" value="{{ $sanpham_bds->anhsp }}">
                        </td>
                        <td>
                            <input type="text" name="huong" value="{{ $sanpham_bds->huong }}">
                        </td>
                        <td>
                            <input type="text" name="chieudai" value="{{ $sanpham_bds->chieudai }}">
                        </td>
                        <td>
                            <input type="text" name="chieurong" value="{{ $sanpham_bds->chieurong }}">
                        </td>

                     </tbody>
                     <thead>
                        <tr>

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
                     <tbody>

                        <td>
                            <input type="text" name="sophongtam" value="{{ $sanpham_bds->sophongtam }}">
                        </td>
                        <td>
                            <input type="text" name="sophongngu" value="{{ $sanpham_bds->sophongngu }}">
                        </td>
                        <td>
                            <input type="text" name="xetduyet" value="{{ $sanpham_bds->xetduyet }}">
                        </td>
                        <td>
                            <input type="text" name="tinhtrang" value="{{ $sanpham_bds->tinhtrang }}">
                        </td>
                        <td>
                            <input type="text" name="maduan" value="{{ $sanpham_bds->maduan }}">
                        </td>
                        <td>
                            <input type="text" name="diachi" value="{{ $sanpham_bds->diachi }}">
                        </td>
                        <td>
                            <input type="bit" name="nhaxanh" value="{{ $sanpham_bds->nhaxanh }}">
                        </td>
                        <td>
                            <button type="submit">Sửa</button>
                        </td>
                     </tbody>
                    </form>
            </table>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection

