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
                <form method="post" action="/admin/sanphambanners/update/{{ $sanphambanners->id }}">
                    @method('PATCH')
                    @csrf
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Product_id
                    </th>
                    <th>
                        Banner_id
                    </th>
                    <th>
                        Lý do
                    </th>
                </tr>
                </thead>
                <tbody>
                <input type="hidden" name="id" value="{{ $sanphambanners->id }}">
                <td>
                    {{ $sanphambanners->id }}
                </td>

                <td>
                    <select name="product_id" id="product_id">
                        <option value="{{ $sanphambanners->tensp }}">Chọn product_id</option>
                        @foreach ($sanpham_bds as $row)
                            <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->tensp }}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="banner_id" id="banner_id">
                        <option value="{{ $sanphambanners->link }}">Chọn banner_id</option>
                        @foreach ($banners as $row)
                            <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->link }}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="text" name="lly_do" class="form-control" placeholder="Nhập lý do"value="{{ $sanphambanners->lly_do }}">
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

