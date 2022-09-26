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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/tintuc/update/{{ $tintuc->matin }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th>
                            Mã Tin Tức
                        </th>
                        <th>
                            Mã Loại Tin Tức
                        </th>
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
                <tbody>
                        <input type="hidden" name="matin" value="{{ $tintuc->matin }}">
                        <td>
                            <input type="text" name="matin" value="{{ $tintuc->matin }}">
                        </td>
                        <td>
                            <input type="text" name="maloaitin" value="{{ $tintuc->maloaitin }}">
                        </td>
                        <td>
                            <input type="text" name="manguoidang" value="{{ $tintuc->manguoidang }}">
                        </td>
                        <td>
                            <input type="longtext" name="noidung" value="{{ $tintuc->noidung }}">
                        </td>
                        <td>
                            <input type="datetime" name="ngaydang" value="{{ $tintuc->ngaydang }}">
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

