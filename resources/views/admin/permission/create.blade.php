@extends('admin.layouts.admin')
@section('title')
    <title>Tạo Quyền</title>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin/users/add.css') }}">
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tạo Quyền</h3>
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
                <form action='{{ route('permission.store') }}' method="POST">

                    @csrf

                    <div class="form-group ">
                        <select name="module[]" multiple class="form-control" id="module">
                            <option value="select_module">Chọn module cha</option>
                            @foreach (config('permissions.module_table') as $moduleItem)
                                <option value="{{ $moduleItem }}">{{ $moduleItem }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">
                            <input type="checkbox" name="checkAll" id="checkAll">
                            Check All
                        </label>
                        @foreach (Config('permissions.module_child') as $module_child_item)
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="" id=""
                                        value="checkedValue" checked>
                                    {{ $module_child_item }}
                                </label>
                            </div>
                        @endforeach
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
            $('#module').select2({
                placeholder: "Chọn module table",
                allowClear: true


            });

        });
        $(document).ready(function() {
            $('#checkAll').click(function() {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        });
    </script>
@endsection
