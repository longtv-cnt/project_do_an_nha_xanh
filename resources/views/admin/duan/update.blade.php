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
            <form method="post" action="/duan/update/{{ $du_an->id }}">
                    @method('PATCH')
                    @csrf
                    <tbody>
                    <input type="hidden" name="id" value="{{ $du_an->id }}">
                    <td>
                        <input type="text" name="id" value="{{ $du_an->id }}">
                    </td>

                    <td>
                        <input type="text" name="tenduan" value="{{ $du_an->tenduan }}">
                    </td>

                    <td>

                        <input type="text" name="chudautu" value="{{ $du_an->chudautu }}">
                    </td>

                    <td>
                        <button type="submit">Sửa</button>
                    </td>
                </form>
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
