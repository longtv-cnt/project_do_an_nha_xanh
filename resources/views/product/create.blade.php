@extends('layout.app')

@section('title', 'Đăng tin')
@section('content')

    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div>
                        <h2>Đăng sản phẩm</h2>
                        <br>
                        <a href="{{ route('home') }}">Home</a>
                        <a href="">Đăng sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Nhập sản phẩm</h2>
                </div>
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <form class="form-contact contact_form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="duan">Dự án</label><br>
                                    <select name="duan" id="duan">
                                        <option value="">Chọn dự án </option>
                                        @foreach ($duans as $duan)
                                            <option value="{{ $duan->ma_du_an }}">{{ $duan->tenduan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="type_product"> Chọn loại bất động sản</label><br>
                                    <select name="type_product" id="type_product">
                                        <option value="">Chọn loại sản phẩm </option>
                                        @foreach ($typeproducts as $typeproduct)
                                            <option value="{{ $typeproduct->id }}">{{ $typeproduct->tenloai }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="tensp" placeholder="Nhập tên sản phẩm">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Giá tiền</label>
                                    <input type="number" class="form-control" name="giatien" placeholder="Nhập giá tiền">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" name="anhsp" placeholder="Nhập ảnh sản phẩm">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <fieldset>
                                        <label for="">Thông tin chi tiết</label>
                                        <div class="form-group">
                                            <fieldset>
                                                <label for=""> Diên tích</label>
                                            </fieldset>
                                            <input type="number" class="form-control" placeholder="Chiều dài" name="chieudai">
                                            <input type="number" class="form-control" placeholder="Chiều rộng" name="chieurong">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số phòng ngủ</label>
                                            <input type="number" class="form-control" name="sophongngu"
                                                   placeholder="Nhập số phòng ngủ">
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
                                        <div class="form-group">
                                            <label class="i-checks m-b-none"><input type="checkbox" name="nhaxanh"><i></i></label>

                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                        </div>
                        <div class="form-group mt-lg-3">
                            <button type="submit" class="main_btn"> Đăng sản phẩm</button>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </section>

                            @endsection
