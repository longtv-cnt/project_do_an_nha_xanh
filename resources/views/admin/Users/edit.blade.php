@extends('admin.layouts.admin')
@section('title')
    <title>Sửa người dùng</title>
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
                    <h3 class="card-title">Sửa người dùng</h3>
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
                    <form action='{{ route('user.update',['id'=>$user->id]) }}' method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group ">
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Nhập email người dùng" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control"
                                placeholder="Nhập mật khẩu người dùng">
                        </div>
                        <div class="form-group ">
                            <select name="roles[]" multiple class="form-control" id="roles">
                                <option value=""></option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $roleids->contains($role->id)? 'selected' :'' }}>{{ $role->display_name }}</option>
                                @endforeach
                            </select>
                        </div>
{{-- get date selected --}}

                        <div class="form-group">
                            <input type="date" name="date_of_birth" class="form-control"
                                placeholder="ngày sinh của bạn" value=" {{ \Carbon\Carbon::parse($user->ngaysinh)->format('Y-m-d') }}; ">
                        </div>






                        <button class="btn btn-success btn-sm mb-3" type="submit">Sửa</button>


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
