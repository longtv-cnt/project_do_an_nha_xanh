<header class="header-bar">

    <div class="branding">

        <a href="{{ route('home') }}"><img loading="lazy" class=" lazy  preload-me" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ 'uploads/product/logo1.png' }}" data-srcset="{{ 'uploads/product/logo1.png' }} 200w, {{ 'uploads/product/logo1.png' }} 200w" width="200" height="51"   sizes="200px" alt="AQUA CITY" /></a>
        <div id="site-title" class="assistive-text">AQUA CITY</div>
        <div id="site-description" class="assistive-text">Đô thị sinh thái thông minh</div>



    </div>
    <ul id="primary-menu" class="main-nav underline-decoration from-centre-line level-arrows-on" role="menu">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-1959 first has-children">
            <a href="{{ route('home') }}" data-level="1"><span class="menu-item-text"><span class="menu-text">Danh sách dự án</span></span></a><i class="next-level-button"></i>
            <ul class="sub-nav hover-style-bg level-arrows-on" style="left: 0px; opacity: 0; visibility: hidden;">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3002 first has-children">
                <a href="{{ route('home') }}" data-level="2"><span class="menu-item-text"><span class="menu-text">Tất cả sản phẩm</span></span></a>
                </li>
                @foreach($duans as $duan)
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3002 first has-children">
                    <a href="{{URL::to('/duan'.$duan->id)}}" data-level="2"><span class="menu-item-text"><span class="menu-text">{{$duan->tenduan}}</span></span></a><i class="next-level-button"></i>
                    <ul class="sub-nav hover-style-bg level-arrows-on">
                        @foreach($typeproducts as $key => $typeproduct)
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2975 first">
                            <a href="{{URL::to('/loaibds'.$typeproduct->id.'duan'.$duan->id)}}" data-level="3">
                                <span class="menu-item-text">
                                    <span class="menu-text">{{$typeproduct->tenloai}}</span>
                                </span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-1959 first has-children">
            <a href="{{ route('home') }}" data-level="1"><span class="menu-item-text"><span class="menu-text">Giới thiệu</span></span></a><i class="next-level-button"></i>
            <ul class="sub-nav hover-style-bg level-arrows-on" style="left: 0px; opacity: 0; visibility: hidden;">
                @foreach($typeproducts as $key => $typeproduct)
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3002 first has-children">
                        <a href="{{URL::to('/gioithieu/loaibds'.$typeproduct->id)}}" data-level="2"><span class="menu-item-text"><span class="menu-text">{{$typeproduct->tenloai}}</span></span></a><i class="next-level-button"></i>
                    </li>
                @endforeach
            </ul>
        </li>

        <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-4097 dt-mega-menu mega-auto-width mega-column-3">
            <a href="{{ route('tuyendung') }}" data-level="1"><span class="menu-item-text"><span class="menu-text">Tuyển dụng</span></span></a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1965 has-children">
            <a href="{{ route('lienhe') }}" data-level="1"><span class="menu-item-text"><span class="menu-text">Liên hệ</span></span></a><i class="next-level-button"></i>
        </li>

    </ul>
</header>

