

@extends('layout.app')
@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 30px; margin-bottom: 0px; min-height: 0px;">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
            <div class="vc_column-inner vc_custom_1631613523227">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;"><strong><span style="font-size: 14pt;">TỔNG QUAN DỰ ÁN {{$title}}</span></strong></span></h2>
                            <p><span style="font-size: 12pt;"><strong>✅</strong><strong>{{$title}}</strong> là dự án {{$duan}} </span> </p>

                        </div>
                    </div>
                </div></div></div></div>
    @if ($products)
        @foreach ($products as $product)
            <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 30px; min-height: 0px;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1631613572499"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <table class="table" style="width: 100.47807598691482%; height: 378px;" width="695">
                                                        <tbody>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Tên sản phẩm:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->tensp}}</strong></span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Thuộc dự án:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$title}}</strong></span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Loại bất động sản:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$loaibds}}</strong> </span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Vị trí:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->diachi}}</strong></span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Chiều rộng:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->chieurong}}</strong> m</span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Chiều dài:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->chieudai}}</strong> m</span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Hướng:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$huongnha}}</strong></span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Số phòng tắm:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->sophongtam}}</strong> Phòng</span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Số phòng ngủ:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->sophongngu}}</strong> Phòng</span></td>
                                                        </tr>
                                                        <tr style="height: 22px;">
                                                            <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt;">✅&nbsp;Giá tiền:</span></td>
                                                            <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{number_format($product->giatien)}}</strong> đồng</span></td>
                                                        </tr>
                                                        @if($product->daban==1)
                                                            <tr style="height: 22px;">
                                                                <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt; color: red">✅&nbsp;Đã bán</span></td>
                                                                <td style="height: 22px; width: 27.649051090530346%;"><span style="font-size: 12pt; color: red"></span></td>
                                                            </tr>
                                                        @endif
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill"><div class="vc_column-inner vc_custom_1618462570165"><div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    @if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                                                        <p style="text-align: center;"><span style="color: #000080; font-size: 12pt;"><em><img loading="lazy" class="aligncenter wp-image-3461 size-full lazyloaded" src="{{ 'uploads/product/'.$product->anhsp }}" data-src="{{ 'uploads/product/'.$product->anhsp }}" alt="Tổng quan dự án Aqua City Novaland Đồng Nai" width="800" height="522" data-srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w"></em></span></p>
                                                    @else
                                                        <p style="text-align: center;"><span style="color: #000080; font-size: 12pt;"><em><img loading="lazy" class="aligncenter wp-image-3461 size-full lazyloaded" src="{{ $product->anhsp }}" data-src="{{ $product->anhsp }}" alt="Tổng quan dự án Aqua City Novaland Đồng Nai" width="800" height="522" data-srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, v 768w"></em></span></p>
                                                    @endif

                                                </div>
                                            </div>
                                        </div></div></div></div></div></div></div></div>
        @endforeach
    @endif

    @if ($products)
        @foreach ($products as $product)
            <div id="ucRaoVat_rptDetailRv_pnlLH_0">

                <div class="titH4 bold">THÔNG TIN LIÊN HỆ</div>
                <table class="table table-raovat table-striped">
                    <tbody><tr>
                        <td class="bold" style="width:140px">Người liên hệ</td>
                        <td class="dtr2">:&nbsp;&nbsp;<strong class="text-uppercase">qua điện thoại</strong></td>
                    </tr>
                    <tr>
                        <td class="bold">Điện thoại</td>
                        <td class="dtr2">:&nbsp;&nbsp;<a href="tel:0936921488 - 0936621488"><strong>{{$product->lienhe}}</strong></a></td>
                    </tr>


                    <tr><td class="bold">Địa chỉ</td><td class="dtr2">:&nbsp;&nbsp;{{$product->diachi}}</td></tr>
                    </tbody></table>

            </div>





        @endforeach
    @endif


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


    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
                <li class="active"><a href="#hinhthuc" data-toggle="tab">Đánh giá hình thức</a></li>
                <li><a href="#chatluong" data-toggle="tab">Đánh giá chất lượng</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="companyprofile" style="align-items: center">
                <p>.
                <div id="demo2" class="carousel slide" data-ride="carousel" style="width: 50%; ">

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($gallerys as $gallery)
                            @php
                                $i++;
                            @endphp
                            <div class="carousel-item {{$i==1 ? 'active' : '' }}">
                                @if (file_exists(public_path('uploads/gallery/' . $gallery->image)))
                                    <img alt="" src="{{ 'uploads/gallery/'.$gallery->image }}" style="height: 400px; width: 100%">

                                @else
                                    <img alt="" src="{{$gallery->image}}" style="height: 400px; width: 100%">

                                @endif
                            </div>
                        @endforeach
                        {{--                        <ul class="carousel-indicators" style="">--}}
                        {{--                            @php--}}
                        {{--                                $i = 0;--}}
                        {{--                            @endphp--}}
                        {{--                            @foreach($gallerys as $gallery)--}}
                        {{--                                @php--}}
                        {{--                                    $i++;--}}
                        {{--                                @endphp--}}
                        {{--                                <li data-target="#demo2" data-slide-to="{{$i}}" class="active"></li>--}}
                        {{--                            @endforeach--}}
                        {{--                        </ul>--}}
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="font-size:60px;"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo2" data-slide="next">
                        <span class="carousel-control-next-icon" style="font-size:60px;"></span>
                    </a>
                </div>
                <!--/slider-->



                .</p>
            </div>

            <div class="tab-pane fade in active" id="hinhthuc" >
                <div class="col-sm-12">

                    <form>
                        @csrf

                        <div id="commentshow">

                        </div>
                    </form>
                    <p><b>Viết hình thức</b></p>

                    <form action="#">
                        @csrf
                        <input type="hidden" name="htcl" class="htcl" value="1">
                        <input type="hidden" name="user_id" class="user_id" value="{{ $user_id }}">
                        <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$product->id}}">
                        <textarea name="comment" class="comment" placeholder="Nội dung bình luận"></textarea>
                        <div id="notify_comment">

                        </div>
{{--                        <b>Rating: </b> <img src="public/img/rating.png" alt="" />--}}
                        <button type="button" class="btn btn-default pull-right send-comment" id="sendcomment">
                            Gửi bình luận
                        </button>

                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="chatluong" >
                <div class="col-sm-12">
                    <form>
                        @csrf

                        <div id="commentshow2">

                        </div>
                    </form>
                    <p><b>Viết chất lượng</b></p>

                    <form action="#">
                        @csrf
                        <input type="hidden" name="htcl" class="htcl2" value="2">
                        <input type="hidden" name="user_id" class="user_id2" value="{{ $user_id }}">
                        <input type="hidden" name="comment_product_id" class="comment_product_id2" value="{{$product->id}}">
                        <textarea name="comment" class="comment2" placeholder="Nội dung bình luận"></textarea>
                        <div id="notify_comment2">

                        </div>
{{--                        <b>Rating: </b> <img src="public/img/rating.png" alt="" />--}}
                        <button type="button" class="btn btn-default pull-right send-comment" id="sendcomment2">
                            Gửi bình luận
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div><!--/category-tab-->

@endsection
