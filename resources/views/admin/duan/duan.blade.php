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
            <a class="btn btn-success btn-sm" href="{{route('create.duan')}}">
                <i class="bi bi-plus-square-fill"></i>
                  Thêm Bài Viết
            </a>
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
                    <th>
                        Công Cụ
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($du_an as $row)
                <tr>
                        <td>{{$row->maduan}}</td>
                        {{-- <td>{{$row->id}}</td>
                        <td><a href="/duan/destroy/{{$row->id}}">{{$row->maduan}}</a></td> --}}
                        <td>{{$row->tenduan}}</td>
                        <td>{{$row->chudautu}}</td>
                    <td >
                        <a href="/duan/edit/{{$row->maduan}}">Edit</a>
                        {{-- <a class="btn btn-danger btn-sm" href="{{route('destroy')}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                        <form method="POST" action="/duan/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
  </section>
@endsection


