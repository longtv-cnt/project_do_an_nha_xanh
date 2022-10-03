@extends('admin.layouts.admin')
@section('title')
    <title>Loại Quyền Hạn</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Loại Quyền Hạn</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Loại Quyền Hạn
                    </th>
                    <th>
                        Tên Loại Quyền Hạn
                    </th>
                </tr>
            </thead>
            <form action={{route('loaiquyenhan.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="id" class="form-control" placeholder="Nhập Mã Loại Quyền Hạn" value="">
                </td>
                <td>
                    <input type="text" name="tenquyenhan" class="form-control" placeholder="Nhập Tên Loại KháchQuyền Hạn" value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Loại Quyền Hạn</button>
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
                        Mã Loại Quyền Hạn
                    </th>
                    <th>
                        Tên Loại Quyền Hạn
                    </th>
                    <th>
                        Công Cụ
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($loaiquyenhan as $row)
                <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->tenquyenhan}}</td>
                        <td >
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <a href="/loaiquyenhan/edit/{{$row->id}}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>
                            <form method="POST" action="/loaiquyenhan/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
