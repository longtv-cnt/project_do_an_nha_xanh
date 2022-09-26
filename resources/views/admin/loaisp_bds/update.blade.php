@extends('admin.layouts.admin')
@section('title')
    <title>Loại Sản Phẩm Bất Động Sản</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Loại Sản Phẩm Bất Động Sản</h3>
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/loaisp_bds/update/{{ $loaisp_bds->maloai }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th>
                            Mã Loại Sản Phẩm Bất Động Sản
                        </th>
                        <th>
                            Tên Loại Sản Phẩm Bất Động Sản
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="maloai" value="{{ $loaisp_bds->maloai }}">
                        <td>
                            <input type="text" name="maloai" value="{{ $loaisp_bds->maloai }}">
                        </td>
                        <td>
                            <input type="text" name="tenloai" value="{{ $loaisp_bds->tenloai }}">
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

