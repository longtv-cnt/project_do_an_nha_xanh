@extends('admin.layouts.admin')
@section('title')
    <title>Phiếu Thu</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Phiếu Thu</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Mã Phiếu Thu
                    </th>
                    <th>
                        Số Tiền Nộp
                    </th>
                    <th>
                        Lý Do
                    </th>
                    <th>
                        Mã Khách
                    </th>
                    <th>
                        Ngày Tạo
                    </th>
                </tr>
            </thead>
            <form action={{route('phieuthu.store')}} method="POST" >
                {{-- @method('post') --}}
                @csrf
            <tbody>
                <td>
                    <input type="text" name="maphieu" class="form-control" placeholder="Nhập Mã Phiếu Thu" value="">
                </td>
                <td>
                    <input type="text" name="sotiennop" class="form-control" placeholder="Nhập Số Tiền Nộp" value="">
                </td>
                <td>
                    <input type="text" name="lydo"class="form-control" placeholder="Nhập Lý Do" value="">
                </td>
                <td>
                    <input type="text" name="makhach" class="form-control" placeholder="Nhập Mã Khách Hàng"value="">
                </td>
                <td>
                    <input type="datetime" name="ngaytao"  class="form-control" placeholder="Nhập Ngày Tạo"value="">
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit">Thêm Phiếu Thu</button>
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
                        Mã Phiếu Thu
                    </th>
                    <th>
                        Số Tiền Nộp
                    </th>
                    <th>
                        Lý Do
                    </th>
                    <th>
                        Mã Khách
                    </th>
                    <th>
                        Ngày Tạo
                    </th>
                    <th>
                        Công Cụ
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach($phieuthu as $row)
                <tr>
                        <td>{{$row->maphieu}}</td>
                        <td>{{$row->sotiennop}}</td>
                        <td>{{$row->lydo}}</td>
                        <td>{{$row->makhach}}</td>
                        <td>{{$row->ngaytao}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="/admin/phieuthu/edit/{{$row->maphieu}}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>
                            <form method="POST" action="/admin/phieuthu/destroy/{{$row->maphieu}}" onsubmit="return ConfirmDelete( this )">
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
