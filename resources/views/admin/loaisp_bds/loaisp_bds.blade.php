@extends('admin.layouts.admin')
@section('title')
    <title>Loại Sản Phẩm Bất Động Sản</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Loại Sản Phẩm Bất Động Sản</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Loại Sản Phẩm Bất Động Sản
                    </th>
                    <th>
                        Tên Loại Sản Phẩm Bất Động Sản
                    </th>
                </tr>
            </thead>
            <form action={{route('loaisp_bds.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="maloai" class="form-control" placeholder="Nhập Mã Loại Sản Phẩm Bất Động Sản" value="">
                </td>
                <td>
                    <input type="text" name="tenloai" class="form-control" placeholder="Nhập Tên Loại Sản Phẩm Bất Động Sản" value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Loại Bất Động Sản</button>
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
                        Mã Loại Sản Phẩm Bất Động Sản
                    </th>
                    <th>
                        Tên Loại Sản Phẩm Bất Động Sản
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($loaisp_bds as $row)
                <tr>
                        <td>{{$row->maloai}}</td>
                        <td>{{$row->tenloai}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning btn-sm" href="/loaisp_bds/edit/{{$row->maloai}}">Edit</a>

                            <form method="POST" action="/loaisp_bds/destroy/{{$row->maloai}}" onsubmit="return ConfirmDelete( this )">
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
