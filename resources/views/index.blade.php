

@extends('layout.app')
@section('title', 'Trang chủ')

@section('content')

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
                                                        @if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                                                            <img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="{{ 'uploads/product/'.$product->anhsp }}" data-src="{{ 'uploads/product/'.$product->anhsp }}" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ 'uploads/product/'.$product->anhsp }} 800w, {{ 'uploads/product/'.$product->anhsp }} 300w, {{ 'uploads/product/'.$product->anhsp }} 768w">
                                                        @else
                                                            <img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="{{ $product->anhsp }}" data-src="{{ $product->anhsp }}" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="{{ $product->anhsp }} 800w, {{ $product->anhsp }} 300w, {{ $product->anhsp }} 768w">
                                                        @endif
                                                    </strong>
                                                </span>
                                            </p>
                                            <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>{{ $product->tensp }}</b></span></span></p>
                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Quy mô rộng {{ $product->chieurong }} ha</strong></span></p>

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
