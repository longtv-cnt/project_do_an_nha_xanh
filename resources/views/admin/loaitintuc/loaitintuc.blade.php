@extends('admin.layouts.admin')
@section('title')
    <title>Loại Tin Tức</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Loại Tin Tức</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Loại Tin Tức
                    </th>
                    <th>
                        Tên Loại Tin Tức
                    </th>
                </tr>
            </thead>
            <form action={{route('loaitintuc.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="maloaitin" class="form-control" placeholder="Nhập Mã Loại Tin Tức" value="">
                </td>
                <td>
                    <input type="text" name="tenloai" class="form-control" placeholder="Nhập Tên Loại Tin Tức" value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Loại Tin Tức</button>
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
                        Mã Loại Tin Tức
                    </th>
                    <th>
                        Tên Loại Tin Tức
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($loaitintuc as $row)
                <tr>
                        <td>{{$row->maloaitin}}</td>
                        <td>{{$row->tenloai}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning btn-sm" href="/loaitintuc/edit/{{$row->maloaitin}}">Edit</a>

                            <form method="POST" action="/loaitintuc/destroy/{{$row->maloaitin}}" onsubmit="return ConfirmDelete( this )">
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