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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/phieuthu/update/{{ $phieuthu->maphieu }}">
                    @method('PATCH')
                    @csrf
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
                <tbody>
                        <input type="hmaphieuden" name="maphieu" value="{{ $phieuthu->maphieu }}">
                        <td>
                            <input type="text" name="maphieu" value="{{ $phieuthu->maphieu }}">
                        </td>
                        <td>
                            <input type="text" name="sotiennop" value="{{ $phieuthu->sotiennop }}">
                        </td>
                        <td>
                            <input type="text" name="lydo" value="{{ $phieuthu->lydo }}">
                        </td>
                        <td>
                            <input type="text" name="makhach" value="{{ $phieuthu->makhach }}">
                        </td>
                        <td>
                            <input type="datetime" name="ngaytao" value="{{ $phieuthu->ngaytao }}">
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

