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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/phanhoi/update/{{ $phanhoi->id }}">
                    @method('PATCH')
                    @csrf
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
                <tbody>
                        <input type="hidden" name="id" value="{{ $phanhoi->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $phanhoi->id }}">
                        </td>
                        <td>
                            <input type="text" name="user_id" value="{{ $phanhoi->user_id }}">
                        </td>
                        <td>
                            <input type="text" name="masp" value="{{ $phanhoi->masp }}">
                        </td>
                        <td>
                            <input type="datetime" name="ngaytao" value="{{ $phanhoi->ngaytao }}">
                        </td>
                        <td>
                            <input type="datetime" name="ngaycapnhat" value="{{ $phanhoi->ngaycapnhat }}">
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

