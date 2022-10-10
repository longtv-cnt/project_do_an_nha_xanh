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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/sanpham_bds/update/{{ $sanpham_bds->id }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th>
                            Mã Sản Phẩm
                        </th>
                        <th>
                            Mã Dự Án
                        </th>
                        <th>
                            Mã Loại
                        </th>
                        <th>
                            Tên Sản Phẩm
                        </th>
                        {{-- <th>
                            Slug
                        </th> --}}
                        <th>
                            Giá Tiền
                        </th>

                        <th>
                            Ảnh Sản Phẩm
                        </th>
                        <th>
                            Hướng
                        </th>

                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="id" value="{{ $sanpham_bds->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $sanpham_bds->id }}">
                        </td>
                        <td>
                            <input type="text" name="maduan" value="{{ $sanpham_bds->maduan }}">
                        </td>
                        <td>
                            <input type="text" name="maloai" value="{{ $sanpham_bds->maloai }}">
                        </td>
                        <td>
                            <input type="text" name="tensp" value="{{ $sanpham_bds->tensp }}">
                        </td>
                        {{-- <td>
                            <input type="text" name="slug" value="{{ $sanpham_bds->slug }}">
                        </td> --}}
                        <td>
                            <input type="text" name="giatien" value="{{ $sanpham_bds->giatien }}">
                        </td>
                        <td>
                            <input type="text" name="anhsp" value="{{ $sanpham_bds->anhsp }}">
                        </td>
                        <td>
                            <input type="text" name="huong" value="{{ $sanpham_bds->huong }}">
                        </td>


                     </tbody>
                     <thead>
                        <tr>
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
                                Địa Chỉ
                            </th>
                            <th>
                                Liên Hệ
                            </th>
                            <th>
                                Nhà Xanh
                            </th>

                        </tr>
                     </thead>
                     <tbody>
                        <td>
                            <input type="text" name="chieudai" value="{{ $sanpham_bds->chieudai }}">
                        </td>
                        <td>
                            <input type="text" name="chieurong" value="{{ $sanpham_bds->chieurong }}">
                        </td>
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
                            <input type="text" name="diachi" value="{{ $sanpham_bds->diachi }}">
                        </td>
                        <td>
                            <input type="text" name="lienhe" value="{{ $sanpham_bds->lienhe }}">
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

