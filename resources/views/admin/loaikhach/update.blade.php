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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/loaikhach/update/{{ $loaikhach->id }}">
                    @method('PATCH')
                    @csrf
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
                <tbody>
                        <input type="hidden" name="id" value="{{ $loaikhach->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $loaikhach->id }}">
                        </td>
                        <td>
                            <input type="text" name="tenloai" value="{{ $loaikhach->tenloai }}">
                        </td>
                        <td>
                            <button type="submit">Sửa</button>
                        </td>

                </tbody>

                    </form>
            </table>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection

