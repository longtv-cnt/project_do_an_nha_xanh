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
        <div class="card-tools">
            <a class="btn btn-success btn-sm" href="{{route('create.duan')}}">
                <i class="bi bi-plus-square-fill"></i>
                  Thêm Bài Viết
            </a>
        </div>
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
                    <input type="text" name="maduan" class="form-control" placeholder="Nhập Mã Dự Án" value="">
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
                        <td>{{$row->maduan}}</td>
                        {{-- <td>{{$row->id}}</td>
                        <td><a href="/duan/destroy/{{$row->id}}">{{$row->maduan}}</a></td> --}}
                        <td>{{$row->tenduan}}</td>
                        <td>{{$row->chudautu}}</td>
                    <td >
                        <a class="btn btn-warning btn-sm" href="/duan/edit/{{$row->maduan}}">Edit</a>
                        {{-- <a href="{{route('du_an.edit',$row->maduan)}}">Edit</a> --}}

                        {{-- <a class="btn btn-danger btn-sm" href="{{route('destroy')}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a> --}}
                        <form method="POST" action="/duan/destroy/{{$row->maduan}}" onsubmit="return ConfirmDelete( this )">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm"  type="submit">Xóa</button>
                        </form>
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


