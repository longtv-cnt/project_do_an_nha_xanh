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
                <form method="post" action="/admin/khachhang/update/{{ $khachhang->id }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th >
                            Mã Khách Hàng
                        </th>
                        <th>
                            Tên Khách Hàng
                        </th>
                        <th>
                            Số Điện Thoại
                        </th>
                        <th >
                            Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="id" value="{{ $khachhang->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $khachhang->id }}">
                        </td>
                        <td>
                            <input type="text" name="tenkhach" value="{{ $khachhang->tenkhach }}">
                        </td>
                        <td>
                            <input type="text" name="SDT" value="{{ $khachhang->SDT }}">
                        </td>
                        <td>
                            <input type="text" name="email" value="{{ $khachhang->email }}">
                        </td>

                     </tbody>
                     <thead>
                        <tr>
                            <th>
                                Địa Chỉ
                            </th>
                            <th>
                                Mã Loại Khách
                            </th>
                            <th>
                                Mã ID User
                            </th>
                        </tr>
                     </thead>
                     <tbody>
                        <td>
                            <input type="text" name="diachi" value="{{ $khachhang->diachi }}">
                        </td>
                        <td>
                            <input type="text" name="maloaikhach" value="{{ $khachhang->maloaikhach }}">
                        </td>
                        <td>
                            <input type="text" name="idUser" value="{{ $khachhang->idUser }}">
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

