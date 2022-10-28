

@extends('layout.app')
@section('title', 'Trang chủ')

@section('content')
    <!-- ======= Property Search Section ======= -->

    <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
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
                        {{--                        {{ route('filter') }}--}}
                        {{--                            <form action="{{ route('filter') }}" method="POST" id="filterform" enctype="multipart/form-data">--}}
                        {{--                                @csrf--}}
                        <div id="pnlFillter" class="box_filter mgb20">

                            <div class="container clearfix pdt15 pdb5">
                                <ul class="list-unstyled menu-top menu_filter bold text-uppercase hidden-xs">
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[1]->id)}}" title="{{$typeproducts[1]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010100-nha-mat-duong.png" alt="Nhà - đất Mặt đường"></span>{{$typeproducts[1]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[2]->id)}}" title="{{$typeproducts[2]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010200-nha-trong-ngo.png" alt="Nhà - đất trong Ngõ"></span>{{$typeproducts[2]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[3]->id)}}" title="{{$typeproducts[3]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010300-nha-trong-du-an-phan-lo.png" alt="Nhà - đất trong Dự án phân lô"></span>{{$typeproducts[3]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[4]->id)}}" title="{{$typeproducts[4]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010400-nha-tap-the-can-ho-chung-cu.png" alt="Căn hộ, chung cư"></span>{{$typeproducts[4]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[5]->id)}}" title="{{$typeproducts[5]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/020000-nha-biet-thu.png" alt="Nhà - đất Biệt thự"></span>{{$typeproducts[5]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[6]->id)}}" title="{{$typeproducts[6]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010600-van-phong-kiot-cua-hang.png" alt="Văn phòng, kiot, cửa hàng"></span>{{$typeproducts[6]->tenloai}}</a></li>
                                    <li class="text-center hidden-xs"><a href="{{URL::to('/loaibds'.$typeproducts[7]->id)}}" title="{{$typeproducts[7]->tenloai}}"><span><img class="img img1 hidden-xs" src="https://nhadatvanminh.com.vn/images/menur/010900-nha-xuong-kho-ben-bai.png" alt="Nhà xưởng, kho, bến bãi"></span>{{$typeproducts[7]->tenloai}}</a></li>
                                </ul>
                                <div id="UpdatePanel3">
                                    <div class="tit_filter hidden-xs bold titH3 mgt0">LỌC TÌM BẤT ĐỘNG SẢN</div>
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
                                                <option selected="selected" value=""><strong>Tỉnh thành</strong></option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->diachi }}">{{ $product->diachi }}</option>
                                                @endforeach
                                                <option value=""><strong>Tất cả tỉnh thành</strong></option>
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
                                                <option selected="selected" value=""><strong>Hướng</strong></option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->huong }}">{{ $product->huong }}</option>
                                                @endforeach
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

                    <div id="countryList1">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            @if ($products)
                                @foreach ($products as $product)
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1631612444151">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">
                                                <span style="font-size: 12pt; color: #0000ff;">
                                                    <strong>
                                                        <a href="{{URL::to('/chitiet'.$product->id)}}" class="mask">
                                                        @if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                                                                <img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="{{ 'uploads/product/'.$product->anhsp }}" data-src="{{ 'uploads/product/'.$product->anhsp }}" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w">
                                                            @else
                                                                <img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="{{ $product->anhsp }}" data-src="{{ $product->anhsp }}" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w">
                                                            @endif
                                                        </a>
                                                    </strong>
                                                </span>
                                                        </p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>{{ $product->tensp }}</b></span></span></p>
                                                        <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền {{ $product->giatien }} đồng</strong></span></p>

                                                    </div>
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
                    <div id="countryList2">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        @if ($tintuc)
                            @foreach ($tintuc as $tin)
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                                    <div class="col-xs-12 col-sm-7 col-md-8 pdl10 pdr0">
                                                        <h3 class="titH5 mgb5 bold500 mgt0"><a class="c_red" href="/tintuc{id}">{{$tin->tentin}}</a></h3>
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

@endsection
