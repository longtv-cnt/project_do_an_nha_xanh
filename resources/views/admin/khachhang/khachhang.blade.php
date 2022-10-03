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
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Khách Hàng
                    </th>
                    <th>
                        Mã Loại Khách Hàng
                    </th>
                    <th>
                        Tên Khách Hàng
                    </th>
                    <th>
                        Email
                    </th>
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
            <form action={{route('khachhang.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="makhach" class="form-control" placeholder="Nhập Mã Khách" value="">
                </td>
                <td>
                    <input type="text" name="maloaikhach" class="form-control" placeholder="Nhập Mã Loại Khách" value="">
                </td>
                <td>
                    <input type="text" name="tenkhach"class="form-control" placeholder="Nhập Tên Khách Hàng" value="">
                </td>
                <td>
                    <input type="text" name="email" class="form-control" placeholder="Nhập Email"value="">
                </td>
                <td>
                    <input type="text" name="SDT"  class="form-control" placeholder="Nhập Số Điện Thoại"value="">
                </td>
                <td>
                    <input type="text" name="taikhoanzalo" class="form-control" placeholder="Nhập Tài Khoản Zalo"value="">
                </td>
                <td>
                    <input type="text" name="diachi" class="form-control" placeholder="Nhập Địa Chỉ"value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Khách Hàng</button>
                </td>

            </tbody>

            </form>
        </table>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th >
                        Mã Khách Hàng
                    </th>
                    <th>
                        Mã Loại Khách
                    </th>
                    <th>
                        Tên Khách Hàng
                    </th>
                    <th >
                        Email
                    </th>
                    <th>
                        Số Điện Thoại
                    </th>
                    <th>
                        Tài Khoản Zalo
                    </th>
                    <th>
                        Địa Chỉ
                    </th>
                    <th>
                        Công Cụ
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach($khachhang as $row)
                <tr>
                        <td>{{$row->makhach}}</td>
                        <td>{{$row->maloaikhach}}</td>
                        <td>{{$row->tenkhach}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->SDT}}</td>
                        <td>{{$row->taikhoanzalo}}</td>
                        <td>{{$row->diachi}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="/khachhang/edit/{{$row->makhach}}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>
                            <form method="POST" action="/khachhang/destroy/{{$row->makhach}}" onsubmit="return ConfirmDelete( this )">
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
