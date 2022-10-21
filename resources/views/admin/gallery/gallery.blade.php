@extends('admin.layouts.admin')
@section('title')
    <title>Gallery</title>
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gallery</h3>
                </div>
                <form action="{{ url('/insert-gallery') }}" class="mb-3" method="POST" enctype="multipart/form-data">
                    {{-- <form method="post" action="/loaitintuc/update/{{ $loaitintuc->id }}">"/insert-gallery,{{$sanpham_id}}"
            <form action={{route('loaiquyenhan.store')}} method="POST" > --}}
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" class="form-control" id="file" name="image" accept="image/*"
                                multiple>
                            <span id="error_gallery "></span>
                        </div>
                        <div class="col-md-3">

                            <select name="sanpham_id"  >
                                <option value="choose">Chọn sản phẩm</option>
                                @foreach ($products as $item)
                                    <option value="{{ $item->id }}">{{ $item->tensp }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="id" class="form-control" placeholder="Nhập Mã " value="" hidden>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" name="upload" name="taianh" value="Tải Ảnh" class="btn btn-success">
                        </div>
                    </div>

                </form>

                <div class="row text-white bg-dark">
                    @foreach ($products as $row)
                        <div class="card-header ">
                            @if (in_array($row->id, $gallery->pluck('sanpham_id')->toArray()))
                                <h3 class="text-danger">{{ $row->id }}</h3>
                            @endif

                        </div>
                        <div class="container">
                            @if ($row->gallery)
                                <div class="row" style="display: flex; justify-content: center">
                                    @foreach ($row->gallery as $item)
                                        <div class="col-md-3">
                                            <div class="card">
                                                @if (file_exists(public_path('store/' . $item->image)))
                                                    <img class="card-img" src="{{ 'store/' . $item->image }}" alt=""
                                                        height="150px">
                                                @else
                                                    <img class="card-img" src="{{ $item->image }}" alt=""
                                                        height="150px">
                                                @endif

                                                <div class="card-body">
                                                    <a onclick="return confirm('Bạn có thực sự muốn xóa?')"
                                                      href="{{route('gallery.delete',
                                                       ['id'=>$item->id])}}">
                                                       <i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            @endif

                        </div>
                </div>
                @endforeach

            </div>



            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
    </section>
@endsection
