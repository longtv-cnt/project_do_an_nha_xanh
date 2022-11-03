@extends('admin.layouts.admin')
@section('title')
    <title>Vai trò</title>
@endsection
@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="{{ route('role.create') }}" class="btn btn-success"> Thêm vai trò</a><br>
        <h3 class="card-title">Danh sách vai trò</h3>

<div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Tên vai trò
                    </th>
                    <th>
                        Công Cụ
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $row)
                <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->display_name}}</td>
                        <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('role.edit',['id'=>$row->id]) }}">
                                    <div type="button" class="btn btn-warning btn-sm" >
                                        Edit
                                    </div>
                                </a>

                            <form method="POST" action="{{route('role.destroy',['id'=>$row->id]) }}" onsubmit="return ConfirmDelete( this )">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm"  type="submit">Xóa</button>
                            </form>
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      <!-- /.card-body -->
    </div>
      </div>


    <!-- /.card -->
    </div>
  </section>
@endsection


      </div>
