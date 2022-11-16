

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
                                                    <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->huong}}</strong></span></td>
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
                                                    <td style="height: 22px; width: 182.3455444625794%;"><span style="font-size: 12pt;"><strong>{{$product->giatien}}</strong> đồng</span></td>
                                                </tr>
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
                <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="companyprofile" >
                <p>.
                <div id="slider-carousel" class="carousel slide" data-ride="carousel" style=" height: 500px">

                    <style type="text/css">
                        img.img.img-responsive.img-slider {
                            height: 500px;
                            margin-top: 10px;
                            margin-left: 50px;
                        }
                    </style>
                    <div class="carousel-inner" style=" height: 600px; width: 50%;">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($gallerys as $gallery)
                            @php
                                $i++;
                            @endphp
                            <div class="item {{$i==1 ? 'active' : '' }}">
                                @if (file_exists(public_path('uploads/gallery/' . $gallery->image)))
                                    <img alt="" src="{{ 'uploads/gallery/'.$gallery->image }}" height="50%" width="100%" class="img img-responsive img-slider">

                                @else
                                    <img alt="" src="{{$gallery->image}}" height="50%" width="100%" class="img img-responsive img-slider">

                                @endif
                            </div>
                        @endforeach


                    </div><br>
                    <ol class="carousel-indicators">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($gallerys as $gallery)
                            @php
                                $i++;
                            @endphp
                            <li data-target="#slider-carousel" data-slide-to="{{$i}}" class="active"></li>
                        @endforeach
                    </ol>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>




                .</p>
            </div>

            <div class="tab-pane fade in active" id="reviews" >
                <div class="col-sm-12">

                    <form>
                        @csrf

                        <div id="commentshow">

                        </div>
                    </form>
                    <p><b>Viết đánh giá của bạn</b></p>

                    <form action="#">
                        @csrf
                        <input type="hidden" name="user_id" class="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$product->id}}">
                        <textarea name="comment" class="comment" placeholder="Nội dung bình luận"></textarea>
                        <div id="notify_comment">

                        </div>
                        <b>Rating: </b> <img src="public/img/rating.png" alt="" />
                        <button type="button" class="btn btn-default pull-right send-comment" id="sendcomment">
                            Gửi bình luận
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div><!--/category-tab-->

@endsection
