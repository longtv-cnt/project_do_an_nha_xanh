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
                <form action="{{ route('insert_gallery') }}" class="mb-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" class="form-control" id="file" name="image" accept="image/*"
                                multiple>
                            <span id="error_gallery "></span>
                        </div>
                        <div class="col-md-3">

                            <select name="sanpham_id">
                                <option value="choose">Chọn sản phẩm</option>
                                @foreach ($products as $item)
                                    <option value="{{ $item->id }}">{{ $item->tensp }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" name="upload" name="taianh" value="Tải Ảnh" class="btn btn-success">
                        </div>
                    </div>

                </form>

                <div class="col-12">
                    @foreach ($products as $row)
                    <div class="card card-primary">
                        <div class="card-header">
                            @if (in_array($row->id, $gallery->pluck('sanpham_id')->toArray()))
                                <h1 style="align-content: left" class="card-title" class="text-danger ">{{ $row->id }}-{{ $row->tensp }}</h1>
                            @endif
                        </div>
                    </div>
                        <div class="card-body">
                        <div class="container">
                            @if ($row->gallery)
                                <div class="row" style="display: flex; justify-content: center">
                                    @foreach ($row->gallery as $item)
                                        <div class="col-md-3">
                                            <div class="card">
                                                @if (file_exists(public_path('uploads/gallery/' . $item->image)))
                                                    <img class="card-img" src="{{asset('uploads/gallery/').'/'. $item->image }}" alt=""
                                                        height="150px">
                                                @else
                                                    <img class="card-img" src="{{ $item->image }}" alt=""
                                                        height="150px">
                                                @endif

                                                <div class="card-body">
                                                    <a onclick="return confirm('Bạn có thực sự muốn xóa?')" class="btn btn-danger"
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
                </div>
                @endforeach
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
    </section>
@endsection
