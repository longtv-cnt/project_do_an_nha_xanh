<footer id="footer" class="footer solid-bg footer-outline-decoration" style="opacity: 1;">


    <div class="wf-wrap">
        <div class="wf-container-footer">
            <div class="wf-container">

                <section id="black-studio-tinymce-6" class="widget widget_black_studio_tinymce wf-cell wf-1-4"><div class="textwidget"><p>
                            <a href="">
                                <img loading="lazy" class="wp-image-2751 size-full alignnone lazyloaded" src="uploads/product/logo1.png" data-src="uploads/product/logo1.png" alt="" width="200" height="51"></a><br>
                             Hải Phòng</p>
                        <p> <strong style="text-decoration: none;"><a style="text-decoration: none;" href="tel:+84909811223">0909 811 223</a></strong> - <strong style="text-decoration: none;"><a style="text-decoration: none;" href="tel:+84908551686">0908 551 686</a></strong></p>
                        <p> <a style="text-decoration: none;" href="" target="_blank" rel="noopener">https://hoanglong.vn/</a></p>
                        <p> info@hoanglongvn.vn</p>
                    </div>
                </section>

                <section id="black-studio-tinymce-10" class="widget widget_black_studio_tinymce wf-cell wf-1-4"><div class="widget-title">CÁC DỰ ÁN</div><div class="textwidget"><p><a style="text-decoration: none;" href="https://aquacityvn.vn/vi-tri-aqua-city/">Vị trí</a></p>
                        @foreach($duans as $duan)
                            <p><a style="text-decoration: none;" href="https://aquacityvn.vn/cac-phan-khu-aqua-city/">{{$duan->tenduan}}</a></p>
                        @endforeach
                    </div></section>
                <section id="black-studio-tinymce-11" class="widget widget_black_studio_tinymce wf-cell wf-1-4">
                    <div class="widget-title">GIỚI THIỆU</div>
                    <div class="textwidget">
                        @foreach($typeproducts as $key => $typeproduct)
                            <p><a style="text-decoration: none;" href="https://aquacityvn.vn/the-valencia/">{{$typeproduct->tenloai}}</a></p>
                        @endforeach
                    </div>
                </section>
            </div><!-- .wf-container -->
        </div><!-- .wf-container-footer -->
    </div><!-- .wf-wrap -->


    <!-- !Bottom-bar -->
    <div id="bottom-bar" class="solid-bg" role="contentinfo">
        <div class="wf-wrap">
            <div class="wf-container-bottom">
                <div class="wf-table wf-mobile-collapsed">


                    <div class="wf-td">
                        <div class="wf-float-left">

                            Copyright © 2022. All Rights Reserved.
                        </div>
                    </div>


                    <div class="wf-td">

                        <div class="mini-nav wf-float-right">
                            <ul id="bottom-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3298 first">
                                    <a href='{{route('home')}}' data-level='1'><span class="menu-item-text"><span class="menu-text">Nhà xanh</span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3259">
                                    <a href='https://aquacityvn.vn/chinh-sach-bao-mat/' data-level='1'><span class="menu-item-text"><span class="menu-text">Chính sách bảo mật</span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3260">
                                    <a href='https://aquacityvn.vn/dieu-khoan-su-dung/' data-level='1'><span class="menu-item-text"><span class="menu-text">Điều khoản sử dụng</span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3862 has-children"><a href='https://aquacityvn.vn/thong-tin-lien-he/' data-level='1'><span class="menu-item-text"><span class="menu-text">Thông tin liên hệ</span></span></a>
                                    <ul class="sub-nav hover-style-bg level-arrows-on"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5250 first"><a href='https://theclassiavn.vn' data-level='2'><span class="menu-item-text"><span class="menu-text">The Classia</span></span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5251">
                                            <a href='https://venezia-binhchau.com.vn' data-level='2'><span class="menu-item-text"><span class="menu-text">Venezia Beach</span></span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5252"><a href='https://izumicityvn.vn' data-level='2'><span class="menu-item-text"><span class="menu-text">Izumi City</span></span></a></li> </ul></li> </ul>
                            <div class="menu-select"><span class="customSelect1"><span class="customSelectInner">VIN: 180318</span></span></div></div>
                    </div>


                </div>
            </div><!-- .wf-container-bottom -->
        </div><!-- .wf-wrap -->
    </div><!-- #bottom-bar -->
</footer>


