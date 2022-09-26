@extends('layout.app')

@section('title', 'Đăng tin')
@section('content')
    {{-- form đăng bài --}}
    <div class="container" style="margin-top:4rem ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Đăng tin</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="duan">Dự án</label>
                                <select name="duan" id="duan">
                                    <option value="">Chọn dự án </option>
                                    @foreach ($duans as $duan)
                                        <option value="{{ $duan->ma_du_an }}">{{ $duan->tenduan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="type_product"> Chọn loại bất động sản</label>
                                <select name="type_product" id="type_product">
                                    <option value="">Chọn loại sản phẩm </option>
                                    @foreach ($typeproducts as $typeproduct)
                                        <option value="{{ $typeproduct->id }}">{{ $typeproduct->tenloai }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="tensp" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="">Giá tiền</label>
                                <input type="number" class="form-control" name="giatien" placeholder="Nhập giá tiền">
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm</label>
                                <input type="file" class="form-control" name="anhsp" placeholder="Nhập ảnh sản phẩm">
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <legend style="font-size: 16px">Thông tin chi tiết</legend>
                                    <div class="form-group">
                                        <fieldset>
                                            <legend style="font-size: 16px"> Diên tích</legend>
                                        </fieldset>
                                        <input type="number" placeholder="Chiều dài" name="chieudai">
                                        <input type="number" placeholder="Chiều rộng" name="chieurong">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số phòng ngủ</label>
                                        <input type="number" class="form-control" name="sophongngu"
                                            placeholder="Nhập số phòng ngủ">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số phòng tắm</label>
                                        <input type="number" class="form-control" name="sophongtam"
                                            placeholder="Nhập số phòng tắm">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Hướng nhà</label>
                                        <input type="text" class="form-control" name="huongnha"
                                            placeholder="Nhập hướng nhà">
                                    </div>

                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" name="diachi" rows="3"
                                    placeholder="Nhập địa chỉ">
                            </div>
                            </fieldset>
                            </div>
                            <div class="form-group">
                                <button type="submit"> Đăng sản phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                            @endsection
