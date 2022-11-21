@extends('admin.layouts.admin')
@section('title')
    <title>Người dùng</title>
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('user.create') }}" class="btn btn-success"> Thêm Người Dùng</a><br>
                    <h3 class="card-title">Danh sách người dùng</h3>
                    <a href="{{ route('users.export') }}">Xuất File</a>

                    </button></a>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tên
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th style="width:'30%'">
                                        Tên vai trò
                                    </th>
                                    <th>
                                        Công Cụ
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            {{-- @foreach ($row->roles as $role)
                                                <span class="badge badge-info">{{ $role->display_name }}</span>
                                            @endforeach --}}
                                            {{ $row->roles->pluck('display_name')->implode(', ', ' ') }}
                                        </td>

                                        <td class="project-actions text-center">

                                            <div class="btn-group" role="group" aria-label="" style="margin-left:-20% ">
                                                <a href="{{ route('user.edit', ['id' => $row->id]) }}">
                                                    <div type="button" class="btn btn-warning btn-sm">
                                                        Edit
                                                    </div>
                                                </a>

                                                <form method="POST"
                                                    action="{{ route('user.destroy', ['id' => $row->id]) }}"
                                                    onsubmit="return ConfirmDelete( this )">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm" type="submit">Xóa</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $users->links('pagination::bootstrap-4') }}
                        <!-- /.card-body -->
                    </div>
                </div>


                <!-- /.card -->
            </div>
    </section>
@endsection


</div>
