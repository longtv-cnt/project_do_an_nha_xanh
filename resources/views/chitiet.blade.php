

@extends('layout.app')
@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 30px; margin-bottom: 0px; min-height: 0px;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1631613523227"><div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;"><strong><span style="font-size: 14pt;">TỔNG QUAN DỰ ÁN {{$title}}</span></strong></span></h2>
                            <p><span style="font-size: 12pt;"><strong>✅</strong><strong>{{$title}}</strong> là dự án 'duan->mota' </span> <span style="font-size: 12pt;">✅ {{$title}} 'duan->sosanpham' sản phẩm.</span> </p>

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
                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ff0000;"><strong><span style="font-size: 14pt;"><img loading="lazy" class="alignnone wp-image-3904 lazyloaded" src="https://aquacityvn.vn/wp-content/uploads/2021/04/ten.gif" data-src="https://aquacityvn.vn/wp-content/uploads/2021/04/ten.gif" alt="ten" width="20" height="20"> NHẬN BẢNG GIÁ CĂN ĐẸP VÀ ƯU ĐÃI 10/2022</span> <img loading="lazy" class="alignnone size-full wp-image-3817 ls-is-cached lazyloaded" src="https://aquacityvn.vn/wp-content/uploads/2021/04/gif-moi.gif" data-src="https://aquacityvn.vn/wp-content/uploads/2021/04/gif-moi.gif" alt="gif moi" width="41" height="22"></strong></span></p>
                                            <p style="text-align: center;"><span style="color: #0000ff;"><strong><span style="font-size: 14pt;">QUA ZALO <span style="color: #ff0000; font-size: 14pt;"> <img loading="lazy" class="alignnone wp-image-3895 lazyloaded" src="https://aquacityvn.vn/wp-content/uploads/2021/04/zalo-gif.gif" data-src="https://aquacityvn.vn/wp-content/uploads/2021/04/zalo-gif.gif" alt="zalo gif" width="30" height="30"></span></span></strong></span></p>
                                            <p style="text-align: center;">* Thông tin của Quý khách luôn được bảo mật tuyệt đối</p>

                                        </div>
                                    </div>
                                    <form class="contact-form dt-form" action="/" method="post">
                                        <input type="hidden" name="widget_id" value="presscore-contact-form-widget--1"><input type="hidden" name="send_message" value=""><div class="form-fields"><span class="form-name"><label class="assistive-text">Name *</label><input type="text" class="validate[required]" placeholder="Name *" name="name" value="" aria-required="true">
</span><span class="form-telephone"><label class="assistive-text">Telephone *</label><input type="text" class="validate[required,custom[phone]]" placeholder="Telephone *" name="telephone" value="" aria-required="true">
</span></div><p><a href="#" class="dt-btn dt-btn-l dt-btn-submit" rel="nofollow"><span>Nhận bảng giá &amp; Ưu đãi 10/2022 qua Zalo</span></a><a href="#" class="clear-form" rel="nofollow">clear</a><input class="assistive-text" type="submit" value="submit"></p></form>
                                </div></div></div></div></div></div></div></div>
        @endforeach
    @endif

    <div id="ucRaoVat_rptDetailRv_pnlLH_0">

        <div class="titH4 bold">THÔNG TIN LIÊN HỆ</div>
        <table class="table table-raovat table-striped">
            <tbody><tr>
                <td class="bold" style="width:140px">Người liên hệ</td>
                <td class="dtr2">:&nbsp;&nbsp;<strong class="text-uppercase">qua điện thoại</strong></td>
            </tr>
            <tr>
                <td class="bold">Điện thoại</td>
                <td class="dtr2">:&nbsp;&nbsp;<a href="tel:0936921488 - 0936621488"><strong>0936.921.488 - 0936.621.488</strong></a></td>
            </tr>


            <tr><td class="bold">Địa chỉ</td><td class="dtr2">:&nbsp;&nbsp;Số 6/2/33 Kiều Sơn, Hải An, Hải Phòng</td></tr>
            </tbody></table>

    </div>

    <ul class="nav nav-tabs mgb10 bold tabs_raovat">
        <li class=""><a class="pdr0 mgr20 d_image" href="#d_images" role="tab" data-toggle="tab" aria-expanded="false">Hình ảnh</a></li>
        <li class=""><a class="pdr0 mgr20 d_map" href="#d_map" role="tab" data-toggle="tab" aria-expanded="false">Bản đồ</a></li>
        <li class="active"><a class="pdr0 mgr20 d_video" href="#d_video" role="tab" data-toggle="tab" aria-expanded="true">Video</a></li>
    </ul>
    @if ($products)
        @foreach ($products as $product)
    <div class="tab-content mgb15">
        <div class="tab-pane fade" id="d_images">
            <p class="d_img1 img4x3 bd pd10 mgb0 clearfix" id="aimg">
                @if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                <img class="img img2" id="img1" src="{{ 'uploads/product/'.$product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                <a class="img" data-fancybox="d_image" href="{{ 'uploads/product/'.$product->anhsp }}">
                    <img class="img2" src="{{ 'uploads/product/'.$product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                </a>
                @else
                    <img class="img img2" id="img1" src="{{ $product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                    <a class="img" data-fancybox="d_image" href="{{ $product->anhsp }}">
                        <img class="img2" src="{{ $product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                    </a>
                @endif
            </p>
            <div class="owl-carousel clearfix pd15 text-center owl-loaded owl-drag owl-hidden" id="gallery">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1635px;">
                        <div class="owl-item active" style="width: 153.5px; margin-right: 10px;">
                            <a href="javascript:void()" class="img4x3 bd pd5 ahover active" data-image="{{ $product->anhsp }}">
                                <img class="img img2" src="{{ $product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                            </a>
                        </div>
                        <div class="owl-item active" style="width: 153.5px; margin-right: 10px;">
                            <a class="img4x3 bd pd5 ahover" data-fancybox="d_image" href="{{ $product->anhsp }}" data-image="{{ $product->anhsp }}">
                                <img class="img img2" src="{{ $product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                            </a>
                        </div>
                        <div class="owl-item active" style="width: 153.5px; margin-right: 10px;">
                            <a class="img4x3 bd pd5 ahover" data-fancybox="d_image" href="{{ $product->anhsp }}" data-image="{{ $product->anhsp }}">
                                <img class="img img2" src="{{ $product->anhsp }}" alt="Bán nhà số 6/2/33 Kiều Sơn, Hải An, Hải Phòng">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev disabled">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
        <div class="tab-pane fade bd pd10" id="d_map" style="opacity: 1; overflow: visible;">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="/map.html?map=224543"></iframe>
            </div>
        </div>
        <div class="tab-pane fade bd pd10 active in" id="d_video" style="opacity: 1; overflow: visible;">
            <div class="embed-responsive embed-responsive-4by3">

                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/?rel=0&amp;hd=1&amp;controls=1&amp;showinfo=0"></iframe>

            </div>
        </div>
    </div>

        @endforeach
    @endif

    <fieldset class="bd pdl10 pdr10 UserDt bg_full2 mgb20">
        <legend class="bold">THÔNG TIN NGƯỜI ĐĂNG</legend>

        <div class="row row-md">
            <div class="col-xs-12 col-md-3 col-md mgb15"><span class="d_imgU mgt10"><img class="img img1" src="/images/user/5.jpg" alt="Nhà Đất Văn Minh"></span></div>
            <div class="col-xs-12 col-md-9 col-xs table-responsive no-border mgb0">
                <table class="table d_table mgb0">
                    <tbody><tr>
                        <td class="bold">Công ty / Cá nhân</td>
                        <td>: Nhà Đất Văn Minh</td>
                    </tr>
                    <tr>
                        <td class="bold">Số điện thoại</td>
                        <td>: <a href="tel:02253 601601">02253 601601</a></td>
                    </tr>
                    <tr><td class="bold">Địa chỉ email</td><td>: <a href="mailto:nhadatvanminh@gmail.com?Subject=Hello%20Nhà Đất Văn Minh" target="_top">nhadatvanminh@gmail.com</a></td></tr>
                    <tr>
                        <td class="bold">Địa chỉ liên lạc</td>
                        <td>: 448 Võ Nguyên Giáp, Vĩnh Niệm, Lê Chân, Hải Phòng</td>
                    </tr>
                    <tr><td class="bold">Website</td><td>: <a href="https://nhadatvanminh.com.vn" target="_blank">nhadatvanminh.com.vn</a></td></tr>
                    </tbody></table>
            </div>
        </div>

    </fieldset>

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
