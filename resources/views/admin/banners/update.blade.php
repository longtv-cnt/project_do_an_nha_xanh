@extends('admin.layouts.admin')
@section('title')
    <title>Banners</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Banners</h3>
        <div class="card-tools">
        </div>
      </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <form method="post" action="/admin/banners/update/{{ $banners->id }}">
                    @method('PATCH')
                    @csrf
                <thead>
                    <tr>
                        <th>
                            ID
                         </th>
                         <th>
                            Image
                         </th>
                         <th>
                            Link
                         </th>
                         <th>
                           Position
                         </th>
                    </tr>
                </thead>
                <tbody>
                        <input type="hidden" name="id" value="{{ $banners->id }}">
                        <td>
                            <input type="text" name="id" value="{{ $banners->id }}">
                        </td>
                        <td>
                            <input type="text" name="image" value="{{ $banners->image }}">
                        </td>
                        <td>
                            <input type="text" name="link" value="{{ $banners->link }}">
                        </td>
                        <td>
                            <input type="text" name="position" value="{{ $banners->position }}">
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

