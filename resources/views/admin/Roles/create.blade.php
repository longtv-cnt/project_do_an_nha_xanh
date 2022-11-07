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
                    <h3 class="card-title">Tạo vai trò mới</h3>

                    <form action='{{ route('role.store') }}' method="POST">
                        {{-- @method('post') --}}
                        @csrf

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên vai trò" required
                                value="">
                        </div>

                        <div class="form-group">
                            <textarea name="display_name" class="form-control" required
                                placeholder="Nhập mô tả vai trò hoặc tên hiển thị mà khách hàng nhìn thấy" rows="5"></textarea>
                        </div>
                                <div class="form-group">
                                <label for="permissions">Các Quyền</label>
                                <div>
                                <label>
                                    <input type="checkbox" class="checkall">
                                    check all
                                </label>
                                </div>

                                @foreach ($parents_permissions as $pI)


                                <div class="  mb-3 card " id="permissions container">
                                    <div class="md-12">
                                        <div class="card-header bg-dark"><label class="form-check-label">
                                            <input type="checkbox" class="form-check-input checkbox_wrapper" name="permissions[]"
                                            value="" id=""  >
                                           {{ $pI->display_name }}
                                        </label></div>

                                        <div class="row">
                                            @foreach ($pI->child as $pIchild)
                                                <div class="form-check md-3 m-3">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox_children" name="permissions[]" value="{{ $pIchild->id }}"
                                                            id="" value="{{ $pIchild->name }}" >
                                                        {{ $pIchild->display_name }}
                                                    </label>
                                                </div>
                                                @endforeach

                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            <button class="btn btn-success btn-sm mb-3" type="submit">Thêm vai trò</button>


                    </form>
                </div>


                <!-- /.card -->
            </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.checkbox_wrapper').on('click', function() {
                $(this).parents('.md-12').find('.checkbox_children').prop('checked', $(this).prop('checked'));
            });
            $('.checkbox_children').on('click', function() {
                var total = $(this).parents('.md-12').find('.checkbox_children').length;
                var number = $(this).parents('.md-12').find('.checkbox_children:checked').length;
                if (total == number) {
                    $(this).parents('.md-12').find('.checkbox_wrapper').prop('checked', true);
                } else {
                    $(this).parents('.md-12').find('.checkbox_wrapper').prop('checked', false);
                }
            });
        });

    </script>
<script>
   $(document).ready(function() {
            $('.checkall').on('click', function() {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        });
    </script>

    </script>
@endsection
