@extends('admin.layouts.admin')
@section('title')
    <title>Tin Tức</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tin Tức</h3>
      </div>
      <div class="card-tools">
          <a class="btn btn-success" href="{{route('tintuc.create')}}"> Thêm Tin tức</a>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Tin Tức
                    </th>
                    <th>
                        Mã Loại Tin Tức
                    </th>
                    <th>
                        Tên Tin Tức
                    <th>
                        Mã Người Đăng
                    </th>
                    <th>
                        Nội Dung
                    </th>
                    <th>
                        Ngày Đăng
                    </th>
                </tr>
            </thead>
            <form action={{route('tintuc.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="id" class="form-control" placeholder="Nhập Mã Tin Tức" value="">
                </td>
                <td>
                    <input type="text" name="loaitin" class="form-control" placeholder="Nhập Mã Loại Tin Tức" value="">
                </td>
                <td>
                    <input type="text" name="manguoidang"class="form-control" placeholder="Nhập Mã Người Đăng" value="">
                </td>
                <td>
                    <input type="longtext" name="noidung" class="form-control" placeholder="Nhập Nội Dung"value="">
                </td>
                <td>
                    <input type="datetime" name="ngaydang"  class="form-control" placeholder="Nhập Ngày Đăng"value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Tin Tức</button>
                </td>

            </tbody>

            </form>
        </table>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects" >
            <thead>
                <tr>
                    <th >
                        Mã Tin Tức
                    </th>
                    <th>
                        Mã Loại Tin Tức
                    </th>
                    {{-- <th>
                        tiêu đề
                    </th> --}}
                    <th>
                        Mã Người Đăng
                    </th>
                    <th >
                        Nội Dung

                    </th>
                    <th>
                        Ngày Đăng
                    </th>
                    <th>
                        Công Cụ
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach($tintuc as $row)
                <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->loaitin}}</td>
                        {{-- <td>{{$row->tentin}}</td> --}}
                        <td>{{$row->manguoidang}}</td>
                        <td>{{$row->noidung}}</td>
                        <td>{{$row->ngaydang}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="/tintuc/chitiet/{{$row->id}}">
                                    <div type="button" class="btn btn-primary btn-sm" >
                                        Chi Tiết
                                    </div>
                                </a>
                                <a href="/tintuc/edit/{{$row->id}}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>
                            <form method="POST" action="/tintuc/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
