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
                                                        <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền {{ $product->giatien }} đồng</strong></span></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <span id="ucRaoVat_lblPage" class="lpg clearfix text-center pdt15">
                            <a class="apage" href="">{!! $paginate->links()!!}</a>
                        </span>

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
