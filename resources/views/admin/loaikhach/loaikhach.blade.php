@extends('admin.layouts.admin')
@section('title')
    <title>Loại Khách Hàng</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Loại Khách Hàng</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Loại Khách Hàng
                    </th>
                    <th>
                        Tên Loại Khách Hàng
                    </th>
                </tr>
            </thead>
            <form action={{route('loaikhach.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="id" class="form-control" placeholder="Nhập Mã Loại Khách" value="">
                </td>
                <td>
                    <input type="text" name="tenloai" class="form-control" placeholder="Nhập Tên Loại Khách" value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Loại Khách Hàng</button>
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
                        Mã Loại Khách Hàng
                    </th>
                    <th>
                        Tên Loại Khách Hàng
                    </th>
                    <th>
                        Công Cụ
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($loaikhach as $row)
                <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->tenloai}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="/admin/loaikhach/edit/{{$row->id}}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>
                            <form method="POST" action="/admin/loaikhach/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
