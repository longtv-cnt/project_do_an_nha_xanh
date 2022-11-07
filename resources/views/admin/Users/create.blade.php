@extends('admin.layouts.admin')
@section('title')
    <title>Thêm người dùng</title>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
<link rel="stylesheet" href="{{ asset('css/admin/users/add.css') }}">
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm người dùng</h3>
                </div>
                {{-- display error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action='{{ route('user.store') }}' method="POST">

                        @csrf

                        <div class="form-group ">
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Nhập email người dùng">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control"
                                placeholder="Nhập mật khẩu người dùng">
                        </div>
                        <div class="form-group ">
                            <select name="roles[]" multiple class="form-control" id="roles">
                                <option value=""></option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="date" name="date_of_birth" class="form-control"
                                placeholder="ngày sinh của bạn">
                        </div>






                        <button class="btn btn-success btn-sm mb-3" type="submit">thêm</button>


                    </form>
                </div>


                <!-- /.card -->
            </div>
    </section>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.js"></script>
    <script>
        $(document).ready(function() {
            $('#roles').select2({
                placeholder: "Chọn vai trò",
                allowClear: true


            });

        });
    </script>
@endsection
