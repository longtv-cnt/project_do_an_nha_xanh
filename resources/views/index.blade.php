

@extends('layout.app')
@section('title', 'Trang chủ')

@section('content')
    <!-- ======= Property Search Section ======= -->

    <div class="vc_row wpb_row vc_row-fluid dt-default" style="width: 100%">
        <div class="wpb_column vc_column_container vc_col-sm-2" style="margin-top: 160px">
            <div class="vc_column-inner ">
                <div id="demo1" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($bannerleft as $banner)
                            @php
                                $i++;
                            @endphp
                            <li data-target="#demo1" data-slide-to="{{$i}}" class="active"></li>
                        @endforeach
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($bannerleft as $banner)
                            @php
                                $i++;
                            @endphp
                            <div class="carousel-item {{$i==1 ? 'active' : '' }}">
                                <a href="{{URL::to('/sanphambanner'.$banner->id)}}" class="mask">
                                    @if (file_exists(public_path('uploads/banner/' . $banner->image)))
                                        <img class="img2" alt="{{$banner->id}}" src="{{ 'uploads/banner/'.$banner->image }}">
                                    @else
                                        <img class="img2" alt="{{$banner->id}}" src="{{$banner->image}}">
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="font-size:60px;"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo1" data-slide="next">
                        <span class="carousel-control-next-icon" style="font-size:60px;"></span>
                    </a>
                </div>
            </div>
        </div>
        <style>
            /* Make the image fully responsive */
            .carousel-inner .img2 {
                width: 100%;
                height: 100%;
            }
        </style>
        <div class="wpb_column vc_column_container vc_col-sm-8">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;"><span style="color: #008000; font-size: 16pt;"><strong><span style="font-family: verdana, geneva, sans-serif;">{{$loaibds}} tại</span></strong></span></p>
                            <p style="text-align: center;"><span style="color: #0000ff; font-size: 18pt;"><strong><span style="font-family: verdana, geneva, sans-serif;">{{$title}}</span></strong></span></p>

                        </div>
                    </div>
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green vc_custom_1647596904498  vc_custom_1647596904498"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                    </div>

                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">TÌM BẤT ĐỘNG SẢN</button>
                    <div id="demo" class="collapse">
                        <div id="pnlFillter" class="box_filter mgb20">
                            <div class="container clearfix pdt15 pdb5" style="width: 70%">
                                <ul class="list-unstyled menu-top menu_filter bold text-uppercase hidden-xs">
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[1]->id)}}" title="{{$typeproducts[1]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010100-nha-mat-duong.png" ></span>{{$typeproducts[1]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[2]->id)}}" title="{{$typeproducts[2]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010200-nha-trong-ngo.png" ></span>{{$typeproducts[2]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[3]->id)}}" title="{{$typeproducts[3]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010300-nha-trong-du-an-phan-lo.png" ></span>{{$typeproducts[3]->tenloai}}</a></li>
                                    {{--                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[4]->id)}}" title="{{$typeproducts[4]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010400-nha-tap-the-can-ho-chung-cu.png" ></span>{{$typeproducts[4]->tenloai}}</a></li>--}}
                                    {{--                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[5]->id)}}" title="{{$typeproducts[5]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/020000-nha-biet-thu.png" ></span>{{$typeproducts[5]->tenloai}}</a></li>--}}
                                    {{--                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[6]->id)}}" title="{{$typeproducts[6]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010600-van-phong-kiot-cua-hang.png" ></span>{{$typeproducts[6]->tenloai}}</a></li>--}}
                                    {{--                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[7]->id)}}" title="{{$typeproducts[7]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010900-nha-xuong-kho-ben-bai.png" ></span>{{$typeproducts[7]->tenloai}}</a></li>--}}
                                    {{--                               --}}
                                </ul><br>
                                <div id="UpdatePanel3">
                                    <div class="tit_filter hidden-xs bold titH3 mgt0">TÌM BẤT ĐỘNG SẢN</div>
                                    <div class="mTit hidden-desk text-center bold"><span>TÌM BẤT ĐỘNG SẢN</span></div>
                                    <div class="box_fil clearfix">
                                        <div class="item-fil mgb10">
                                            <select name="sapxep" id="sapxep" class="form-control no-radius no-shadow icon2">
                                                <option selected="selected" value=""><strong>Sắp xếp</strong></option>
                                                <option value="1">Giá tăng dần</option>
                                                <option value="2">Giá giảm dần</option>
                                            </select></div>
                                        <div class="item-filA">
                                            <select name="diachi" onchange="javascript:setTimeout('__doPostBack(\'CityIDR\',\'\')', 0)" id="diachi" class="form-control no-radius no-shadow icon1">
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
                                            </select></div>
                                        <div class="item-fil mgb10">
                                            <select name="maduan" id="maduan" class="form-control no-radius no-shadow icon1">
                                                <option selected="selected" value=""><strong>Loại dự án</strong></option>
                                                @foreach ($duans as $duan)
                                                    <option value="{{ $duan->id }}">{{ $duan->tenduan }}</option>
                                                @endforeach
                                                <option value=""><strong>Tất cả dự án</strong></option>
                                            </select></div>
                                        <div class="item-fil mgb10">
                                            <select name="maloai" id="maloai" class="form-control no-radius no-shadow icon1">
                                                <option selected="selected" value=""><strong>Loại bất động sản</strong></option>
                                                @foreach ($typeproducts as $typeproduct)
                                                    <option value="{{ $typeproduct->id }}">{{ $typeproduct->tenloai }}</option>
                                                @endforeach
                                                <option value=""><strong>Tất cả loại BĐS</strong></option>
                                            </select></div>
                                        <div class="item-fil mgb10">
                                            <select name="giatien" id="giatien" class="form-control no-radius no-shadow icon3">
                                                <option selected="selected" value="">Giá</option>
                                                <option value="0-1000000000">0 - 1tỷ</option>
                                                <option value="1000000000-3000000000">1tỷ - 3tỷ</option>
                                                <option value="3000000000-5000000000">3tỷ - 5tỷ</option>
                                                <option value="5000000000-10000000000">5tỷ - 100tỷ</option>
                                                <option value="10000000000-9999999999999999999">100tỷ trở lên</option>
                                                <option value=""><strong>Mọi giá cả</strong></option>
                                            </select></div>
                                        <div class="item-fil mgb10">
                                            <select name="huongnha" id="huongnha" class="form-control no-radius no-shadow icon2">
                                                <option selected="selected" value="">Chọn hướng</option>
                                                <option value="1">Đông</option>
                                                <option value="2">Tây</option>
                                                <option value="3">Nam</option>
                                                <option value="4">Bắc</option>
                                                <option value="5">Đông-Nam</option>
                                                <option value="6">Đông-Bắc</option>
                                                <option value="7">Tây-Nam</option>
                                                <option value="8">Tây-Bắc</option>
                                                <option value=""><strong>Tất cả các hướng</strong></option>
                                            </select></div>
                                        <div class="sear-sticky clearfix hidden-desk"></div>
                                        <div class="item-fil2 mgb10">
                                            <input name="tensp" type="text" id="tensp" value="" class="form-control no-radius no-shadow pdl10" placeholder="Tên sản phẩm bất động sản">
                                            <input type="submit" name="filter" value="Tìm Kiếm" id="filter" class="btn btn-danger no-radius bold">
                                            {{ csrf_field() }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{--                                </form>--}}
                        <input type="text" name="country_name" id="country_name" class="form-control no-radius no-shadow pdl10" placeholder="Từ khóa tìm kiếm, mã tin, số ĐT"/>
                        {{ csrf_field() }}
                    </div>
                    <h2></h2>
                    <style type="text/css">
                        #countryList1{
                            border:3px solid #b3d7ff;
                            width:100%;
                            height:1000px;
                            overflow-x:hidden;
                            overflow-y:auto;
                        }
                    </style>
                    <div id="countryList1">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            @if ($products)
                                @foreach ($products as $product )

                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1631612444151">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">
                                                <span style="font-size: 12pt; color: #0000ff;">
                                                    <strong>
                                                        <a href="{{URL::to('/chitiet'.$product->id)}}" class="mask">
                                                        @if (file_exists(public_path('uploads/product/'.$product->anhsp)))
                                                                <img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="{{ "uploads/product/.$product->anhsp"}}" data-src="{{ 'uploads/product/'.$product->anhsp }}" width="800" height="439" data-srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w">
                                                            @else
                                                                <img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="{{ $product->anhsp }}" data-src="{{ $product->anhsp }}"  width="800" height="439" data-srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w">
                                                            @endif
                                                        </a>
                                                    </strong>
                                                </span>
                                                        </p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>{{ $product->tensp }}</b></span></span></p>

                                                        @if($product->giatien<1000000)
                                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền: {{$product->giatien}} đồng</strong></span></p>
                                                        @elseif($product->giatien>=1000000 && $product->giatien<1000000000)
                                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền: {{$product->giatien/1000000}} triệu đồng</strong></span></p>
                                                        @elseif($product->giatien>=1000000000)
                                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền: {{$product->giatien/1000000000}} tỷ đồng</strong></span></p>
                                                        @endif
                                                        @if($product->daban==1)
                                                            <p style="text-align: center;"><span style="color: red; font-size: medium;"><span style="caret-color: white;"><b>Đã bán</b></span></span></p>
                                                        @else
                                                            <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>Chưa bán</b></span></span></p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <span id="ucRaoVat_lblPage" class="lpg clearfix text-center pdt15">
{{--                            <a class="apage" href="">{!! $paginate->links()!!}</a>--}}
                        </span>

                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-2" style="margin-top: 160px">
            <div class="vc_column-inner ">
                <div id="demo1" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($bannerright as $banner)
                            @php
                                $i++;
                            @endphp
                            <li data-target="#demo1" data-slide-to="{{$i}}" class="active"></li>
                        @endforeach
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($bannerright as $banner)
                            @php
                                $i++;
                            @endphp
                            <div class="carousel-item {{$i==1 ? 'active' : '' }}">
                                <a href="{{URL::to('/sanphambanner'.$banner->id)}}" class="mask">
                                    @if (file_exists(public_path('uploads/banner/' . $banner->image)))
                                        <img class="img2" alt="{{$banner->id}}" src="{{ 'uploads/banner/'.$banner->image }}">

                                    @else
                                        <img class="img2" alt="{{$banner->id}}" src="{{$banner->image}}">

                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="font-size:60px;"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo1" data-slide="next">
                        <span class="carousel-control-next-icon" style="font-size:60px;"></span>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid full-width-wrap dt-default" style="padding-left: 0px; padding-right: 0px; margin-top: 0px; margin-bottom: 0px; width: 1710.4px; margin-left: -145px; opacity: 1; min-height: 0px;">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_blue vc_separator-has-text">
                        <span class="vc_sep_holder vc_sep_holder_l">
                            <span class="vc_sep_line"></span>
                        </span>
                        <h4>⭐️ ⭐️ ⭐️ ⭐️ ⭐️</h4>
                        <span class="vc_sep_holder vc_sep_holder_r">
                            <span class="vc_sep_line"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;"><span style="color: #008000; font-size: 16pt;"><strong><span style="font-family: verdana, geneva, sans-serif;">Tin tức</span></strong></span></p>
                            {{--                            <p style="text-align: center;"><span style="color: #0000ff; font-size: 18pt;"><strong><span style="font-family: verdana, geneva, sans-serif;">{{$title}}</span></strong></span></p>--}}

                        </div>
                    </div>
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green vc_custom_1647596904498  vc_custom_1647596904498"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                    </div>

                    <div class="titH3 bold500 tit_box mgt0">
                        <h2 class="display-inline font-size-18px line-height-26px mg0">
                            <span class="tit_span">Loại tin tức</span>
                        </h2>
                        <h2 class="display-inline font-size-18px line-height-26px mg0">
                            <select name="tintuc" id="tintuc" class="">
                                <option selected="selected" value=""><strong>Loại tin</strong></option>
                                @foreach ($loaitintuc as $loai)
                                    <option value="{{$loai->tenloai}}">{{$loai->tenloai}}</option>
                                @endforeach
                                <option value=""><strong>Tất cả tin tức</strong></option>
                            </select>
                        </h2>
                        <h2 class="display-inline font-size-18px line-height-26px mg0">
                            <input type="submit" name="tin" value="Lọc" id="tin" class="tit_span">
                        </h2>

                    </div>
                    <style type="text/css">
                        #countryList2{
                            border:3px solid #b3d7ff;
                            width:100%;
                            height:400px;
                            overflow-x:hidden;
                            overflow-y:auto;
                        }
                    </style>
                    <div id="countryList2">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            @if ($tintuc)
                                @foreach ($tintuc as $tin)
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="col-xs-12 col-sm-7 col-md-8 pdl10 pdr0">
                                                    <h3 class="titH5 mgb5 bold500 mgt0"><a class="c_red" href="{{URL::to('/tintuc'.$tin->id)}}">{{$tin->tentin}}</a></h3>
                                                    <p class="mgb5 mDesc hidden-xs">{{$tin->ngaydang}}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid full-width-wrap dt-default" style="padding-left: 0px; padding-right: 0px; margin-top: 0px; margin-bottom: 0px; width: 1710.4px; margin-left: -145px; opacity: 1; min-height: 0px;">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_blue vc_separator-has-text">
                        <span class="vc_sep_holder vc_sep_holder_l">
                            <span class="vc_sep_line"></span>
                        </span>
                        <h4>⭐️ ⭐️ ⭐️ ⭐️ ⭐️</h4>
                        <span class="vc_sep_holder vc_sep_holder_r">
                            <span class="vc_sep_line"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h1>Câu hỏi thường gặp</h1>
    <div class="vc_row wpb_row vc_inner vc_row-fluid">
        @if ($tintuc)
            @foreach ($tintuc as $tin)
                <div class="wpb_wrapper">
                    <div class="col-xs-12 col-sm-7 col-md-8 pdl10 pdr0">

                        <h2></h2>
                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq{{$tin->id}}" style="width: 1000px;">
                            <h2 class="titH5 mgb5 bold500 mgt0" style="font-size: 22px; color: white;">{{$tin->id}}. {{$tin->tentin}}</h2>
                            <div id="faq{{$tin->id}}" class="collapse" style="background-color: lightskyblue; color: black; font-size: 18px">

                                {{$tin->ngaydang}}
                            </div>
                        </button>
                    </div>
                </div>
            @endforeach
        @endif
    </div>



@endsection
