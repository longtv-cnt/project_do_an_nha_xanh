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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/loaiquyenhan/update/{{ $loaiquyenhan->maloai }}">
                    @method('PATCH')
                    @csrf
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
                <tbody>
                        <input type="hidden" name="maloai" value="{{ $loaiquyenhan->maloai }}">
                        <td>
                            <input type="text" name="maloai" value="{{ $loaiquyenhan->maloai }}">
                        </td>
                        <td>
                            <input type="text" name="tenquyenhan" value="{{ $loaiquyenhan->tenquyenhan }}">
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

