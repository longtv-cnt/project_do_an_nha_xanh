@extends('admin.layouts.admin')
@section('title')
    <title>Phản Hồi</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Phản Hồi</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        ID Người Dùng
                    </th>
                    <th>
                        Mã Sản Phẩm
                    </th>
                    <th>
                        Comment
                    </th>
                    <th>
                        Ngày Tạo
                    </th>
                    <th>
                        Ngày Cập Nhật
                    </th>
                </tr>
            </thead>
            <form action={{route('phanhoi.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="id" class="form-control" placeholder="Nhập ID" value="">
                </td>
                <td>
                    <input type="text" name="user_id" class="form-control" placeholder="Nhập ID Người Dùng" value="">
                </td>
                <td>
                    <input type="text" name="masp"class="form-control" placeholder="Nhập Mã Sản Phẩm" value="">
                </td>
                <td>
                    <input type="text" name="comment" class="form-control" placeholder="Nhập Comment"value="">
                </td>
                <td>
                    <input type="datetime" name="ngaytao"  class="form-control" placeholder="Nhập Ngày Tạo"value="">
                </td>
                <td>
                    <input type="datetime" name="ngaycapnhat" class="form-control" placeholder="Nhập Ngày Cập Nhật"value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Phản Hồi</button>
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
                        ID
                    </th>
                    <th>
                        ID Người Dùng
                    </th>
                    <th>
                        Mã Sản Phẩm
                    </th>
                    <th>
                        Comment
                    </th>
                    <th>
                        Ngày Tạo
                    </th>
                    <th>
                        Ngày Cập Nhật
                    </th>
                    <th>
                        Công Cụ
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach($phanhoi as $row)
                <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->user_id}}</td>
                        <td>{{$row->masp}}</td>
                        <td>{{$row->comment}}</td>
                        <td>{{$row->ngaytao}}</td>
                        <td>{{$row->ngaycapnhat}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning btn-sm" href="/phanhoi/edit/{{$row->id}}">Edit</a>

                            <form method="POST" action="/phanhoi/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
