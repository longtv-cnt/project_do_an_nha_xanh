

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
    <div class="kk-star-ratings
     kksr-valign-bottom     kksr-align-right    "
         data-payload="{&quot;align&quot;:&quot;right&quot;,&quot;id&quot;:&quot;4396&quot;,&quot;slug&quot;:&quot;default&quot;,&quot;valign&quot;:&quot;bottom&quot;,&quot;reference&quot;:&quot;auto&quot;,&quot;count&quot;:&quot;72&quot;,&quot;readonly&quot;:&quot;&quot;,&quot;score&quot;:&quot;4.7&quot;,&quot;best&quot;:&quot;5&quot;,&quot;gap&quot;:&quot;4&quot;,&quot;greet&quot;:&quot;\u0110\u00e1nh gi\u00e1 b\u00e0i vi\u1ebft.&quot;,&quot;legend&quot;:&quot;4.7\/5 - (72 b\u00ecnh ch\u1ecdn)&quot;,&quot;size&quot;:&quot;24&quot;,&quot;width&quot;:&quot;129.6&quot;,&quot;_legend&quot;:&quot;{score}\/{best} - ({count} {votes})&quot;}">

        <div class="kksr-stars">

            <div class="kksr-stars-inactive">
                <div class="kksr-star" data-star="1" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" data-star="2" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" data-star="3" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" data-star="4" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" data-star="5" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
            </div>

            <div class="kksr-stars-active" style="width: 129.6px;">
                <div class="kksr-star" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
                <div class="kksr-star" style="padding-right: 4px">


                    <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
                </div>
            </div>
        </div>

        <div class="kksr-legend">
            4.7/5 - (72 bình chọn)    </div>
    </div>


    <div class="single-share-box"><div class="share-link-description">Chia sẻ bài này</div><div class="share-buttons"><a class="facebook" href="http://www.facebook.com/sharer.php?u=https://aquacityvn.vn/aqua-city-novaland-dong-nai-8/&#038;t=Aqua%20City%20Novaland%20Đồng%20Nai" title="Facebook" target="_blank"></a><a class="twitter" href="https://twitter.com/share?text=Aqua%20City%20Novaland%20Đồng%20Nai&#038;url=https://aquacityvn.vn/aqua-city-novaland-dong-nai-8/" title="Twitter" target="_blank"></a><a class="pinterest pinit-marklet" href="//pinterest.com/pin/create/button/" title="Pinterest" target="_blank" data-pin-config="above" data-pin-do="buttonBookmark"></a><a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&#038;url=https://aquacityvn.vn/aqua-city-novaland-dong-nai-8/&#038;title=Aqua%20City%20Novaland%20Đồng%20Nai&#038;summary=&#038;source=AQUA%20CITY" title="LinkedIn" target="_blank"></a>
        </div>
    </div>

@endsection
