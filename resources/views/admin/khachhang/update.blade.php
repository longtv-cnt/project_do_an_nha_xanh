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
                <form method="post" action="/khachhang/update/{{ $khachhang->makhach }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th>
                            Tên Khách Hàng
                        </th>
                        <th>
                            Mã Loại Khách
                        </th>
                        <th>
                            Tên Khách Hàng
                        </th>
                        <th>
                            Email
                        </th>

                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="makhach" value="{{ $khachhang->makhach }}">
                        <td>
                            <input type="text" name="makhach" value="{{ $khachhang->makhach }}">
                        </td>
                        <td>
                            <input type="text" name="maloaikhach" value="{{ $khachhang->maloaikhach }}">
                        </td>
                        <td>
                            <input type="text" name="tenkhach" value="{{ $khachhang->tenkhach }}">
                        </td>
                        <td>
                            <input type="text" name="email" value="{{ $khachhang->email }}">
                        </td>

                     </tbody>
                     <thead>
                        <tr>
                        <th>
                            Số Điện Thoại
                        </th>
                        <th>
                            Tài Khoản Zalo
                        </th>
                        <th>
                            Địa Chỉ
                        </th>
                        </tr>
                     </thead>
                     <tbody>
                        <td>
                            <input type="text" name="SDT" value="{{ $khachhang->SDT }}">
                        </td>
                        <td>
                            <input type="text" name="taikhoanzalo" value="{{ $khachhang->taikhoanzalo }}">
                        </td>
                        <td>
                            <input type="text" name="diachi" value="{{ $khachhang->diachi }}">
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

