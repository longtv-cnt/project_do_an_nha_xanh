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
                    <button class="btn btn-success btn-sm" type="submit">Thêm Bài Viết</button>
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


