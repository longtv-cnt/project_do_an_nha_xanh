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
                                            <option value="{{ $duan->id }}">{{ $duan->tenduan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="type_product"> Chọn loại bất động sản</label><br>
                                    <select name="maloai" id="type_product">
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
                                            <select name="huongnha" id="huong">
                                                <option value="">Chọn hướng</option>
                                                <option value="1">Đông</option>
                                                <option value="2">Tây</option>
                                                <option value="3">Nam</option>
                                                <option value="4">Bắc</option>
                                                <option value="5">Đông-Nam</option>
                                                <option value="6">Đông-Bắc</option>
                                                <option value="7">Tây-Nam</option>
                                                <option value="8">Tây-Bắc</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Liên hệ</label>
                                            <input type="text" name="lienhe" class="form-control"
                                                   placeholder="Liên Hệ"value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ</label>
                                            <select name="diachi" id="diachi">
                                                <option selected="selected" value="">Tỉnh thành</option>
                                                <option value="Hải Phòng">Hải Phòng</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="TP-HCM">TP-HCM</option>
                                                <option value="An Giang">An Giang</option>
                                                <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                                                <option value="Bình Dương">Bình Dương</option>
                                                <option value="Bình Thuận">Bình Thuận</option>
                                                <option value="Bình Định">Bình Định</option>
                                                <option value="Bạc Liêu">Bạc Liêu</option>
                                                <option value="Bắc Giang">Bắc Giang</option>
                                                <option value="Bắc Kạn">Bắc Kạn</option>
                                                <option value="Bắc Ninh">Bắc Ninh</option>
                                                <option value="Bến Tre">Bến Tre</option>
                                                <option value="Cao Bằng">Cao Bằng</option>
                                                <option value="Cà Mau<">Cà Mau</option>
                                                <option value="Cần Thơ">Cần Thơ</option>
                                                <option value="Gia Lai">Gia Lai</option>
                                                <option value="Hoà Bình">Hoà Bình</option>
                                                <option value="Hà Giang">Hà Giang</option>
                                                <option value="Hà Nam">Hà Nam</option>
                                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                <option value="Hưng Yên">Hưng Yên</option>
                                                <option value="Hải Dương">Hải Dương</option>
                                                <option value="Khánh Hoà">Khánh Hoà</option>
                                                <option value="Kiên Giang">Kiên Giang</option>
                                                <option value="Kon Tum">Kon Tum</option>
                                                <option value="Lai Châu">Lai Châu</option>
                                                <option value="Long An">Long An</option>
                                                <option value="Lào Cai">Lào Cai</option>
                                                <option value="Lâm Đồng">Lâm Đồng</option>
                                                <option value="Lạng Sơn">Lạng Sơn</option>
                                                <option value="Ninh Bình">Ninh Bình</option>
                                                <option value="Móng Cái">Móng Cái</option>
                                                <option value="Ninh Thuận">Ninh Thuận</option>
                                                <option value="Phan Rang">Phan Rang</option>
                                                <option value="Phan Thiết">Phan Thiết</option>
                                                <option value="Quảng Bình">Quảng Bình</option>
                                                <option value="Quảng Nam">Quảng Nam</option>
                                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                <option value="Quảng Ninh">Quảng Ninh</option>
                                                <option value="Quảng Trị">Quảng Trị</option>
                                                <option value="Sóc Trăng">Sóc Trăng</option>
                                                <option value="Sơn La">Sơn La</option>
                                                <option value="Thanh Hoá">Thanh Hoá</option>
                                                <option value="Thái Bình">Thái Bình</option>
                                                <option value="Thái Nguyên">Thái Nguyên</option>
                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                <option value="Tiền Giang">Tiền Giang</option>
                                                <option value="Trà Vinh">Trà Vinh</option>
                                                <option value="Tuyên Quang">Tuyên Quang</option>
                                                <option value="Tây Ninh">Tây Ninh</option>
                                                <option value="Vĩnh Long">Vĩnh Long</option>
                                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                <option value="Yên Bái">Yên Bái</option>
                                                <option value="Điện Biên">Điện Biên</option>
                                                <option value="Đắc Lắk">Đắc Lắk</option>
                                                <option value="Đắc Nôn">Đắc Nông</option>
                                                <option value="Đồng Nai">Đồng Nai</option>
                                                <option value="Đồng Tháp">Đồng Tháp</option>
                                                <option value="">Tất cả tỉnh thành</option>
                                            </select>
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
