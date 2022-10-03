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
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/loaitintuc/update/{{ $loaitintuc->id }}">
                    @method('PATCH')
                    @csrf
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
                        <input type="hidden" name="id" value="{{ $loaitintuc->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $loaitintuc->id }}">
                        </td>
                        <td>
                            <input type="text" name="tenloai" value="{{ $loaitintuc->tenloai }}">
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

