@extends('admin.layouts.admin')
@section('title')
    <title>Dự Án</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Dự Án</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th >
                        Mã Dự Án
                    </th>
                    <th>
                        Tên Dự Án
                    </th>
                    <th >
                        Chủ Đầu Tư
                    </th>
                </tr>
            </thead>
            <form action={{route('du_an.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="id" class="form-control" placeholder="Nhập Mã Dự Án" value="">
                </td>
                <td>
                    <input type="text" name="tenduan"class="form-control" placeholder="Nhập Tên Dự Án" value="">
                </td>
                <td>
                    <input type="text" name="chudautu" class="form-control" placeholder="Nhập Chủ Đầu Tư"value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Dự Án</button>
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
                        Mã Dự Án
                    </th>
                    <th>
                        Tên Dự Án
                    </th>
                    <th >
                        Chủ Đầu Tư
                    </th>
                    <th>
                        Công Cụ
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($du_an as $row)
                    <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->tenduan}}</td>
                            <td>{{$row->chudautu}}</td>
                            <td >
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="/duan/edit/{{$row->id}}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>

                                <form method="POST" action="/duan/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection


