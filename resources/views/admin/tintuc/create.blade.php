@extends('admin.layouts.admin')
@section('title')
    <title>Tin Tức</title>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm tin tức</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('tintuc.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <select name="loaitin" id="">
                                <option value="">Chọn loại tin</option>
                                @foreach ($loaitin as $lt)
                                    <option value="{{ $lt->id }}">{{ $lt->tenloai }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Tiêu đề tin tức</label>
                            <input type="text" name="tentin" class="form-control">
                        </div>
                        <div>
                            <label for="">manguoidang</label>
                            <input type="text" name="manguoidang" value="1" readonly class="form-control">
                            <div>
                                <label for="">Nội dung tin tức</label>
                                <textarea name="noidung" id="noidung" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
                @section('script')
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

                    <script>
                        $('#noidung').summernote({
                            placeholder: 'Nhập nội dung tin tức',
                            tabsize: 2,
                            height: 100
                        });
                    </script>
        @endsection
    </section>
@endsection
