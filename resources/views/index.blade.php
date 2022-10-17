

@extends('layout.app')
@section('title', 'Trang chủ')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">men Collection</p>
                        <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
                        <h4>Fowl saw dry which a above together place.</h4>
                        <a class="main_btn mt-40" href="#">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>{{$title}}</span></h2>
                        <p>Danh sách {{$title}}</p>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <table class="table table-striped projects">
                                <tbody>

                                <form action="{{ route('filter') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label for="sapxep">Sắp xếp theo:</label><br>
                                                    <select name="sapxep" id="sapxep" class="sorting">
                                                        <option value="">{{$sapxep}}</option>
                                                        <option value="1">Giá tăng dần</option>
                                                        <option value="2">Giá giảm dần</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="">Tên sản phẩm</label>
                                            <input type="text" class="form-control"  name="tensp" placeholder="Nhập tên sản phẩm">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <label for="">Hướng nhà</label>
                                            <input type="text" class="form-control" name="huongnha" placeholder="Nhập hướng nhà">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">Địa chỉ</label>
                                            <input type="text" class="form-control" name="diachi" rows="4" placeholder="Nhập địa chỉ">
                                        </div>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <label for="">Số phòng ngủ</label>
                                            <input type="number" class="form-control" name="sophongngu" placeholder="Nhập số phòng ngủ">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Số phòng tắm</label>
                                            <input type="number" class="form-control" name="sophongtam" placeholder="Nhập số phòng tắm">
                                        </div>

                                    </td>

                                    <td>
                                        <fieldset>
                                            <div class="form-group">
                                                <fieldset>
                                                    <label for="">Diện tích</label>
                                                </fieldset>
                                                <input type="number" placeholder="Chiều dài" name="chieudai"><br>
                                                <input type="number" placeholder="Chiều rộng" name="chieurong">

                                            </div>
                                        </fieldset>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <h1 style=" margin-top: 28px; margin-left: 5px;">
                                            <button type="submit" class="btn btn-primary btn-sm" style=" height: 50px; width: 120px; background-color:greenyellow; border-style: none; "><h2 style=" color: white; align-content: center">Search</h2></button>
                                            </h1>
                                        </div>
                                    </td>
                                </tr>
                                </form>
                                </tbody>
                        </table>
                    </div>


                    <div class="latest_product_inner">
                        <div id="countryList">
                            <p>Tìm thấy {{ $products->count() }} sản phẩm thuộc {{$title}}: </p>
                            <div class="row">
                                @if ($products)
                                    @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        @if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                                            <img class="card-img" src="{{ 'uploads/product/'.$product->anhsp }}" alt="" height="100px">
                                        @else
                                            <img class="card-img" src="{{ $product->anhsp }}" alt="" height="100px">
                                        @endif
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>{{ $product->tensp }}</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">{{ $product->giatien . ' đồng' }}</span>
                                            <del>{{ $product->giatien .  ' đồng' }}</del>
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

                <div class="col-lg-3">
                    <div class="left_sidebar_area">

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Loại bất động sản</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <div class="panel-group category-products" id="accordian">
                                        @foreach($typeproducts as $key => $typeproduct)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><a href="{{URL::to('/loaibds'.$typeproduct->id)}}">{{$typeproduct->tenloai}}</a></h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Các dự án</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <div class="brands-name">
                                        <ul class="nav nav-pills nav-stacked">
                                            @foreach($duans as $duan)
                                                <li><a href="{{URL::to('/duan'.$duan->id)}}"> <span class="pull-right"></span>{{$duan->tenduan}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 58.6%; width: 41.4%;"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 58.6%;"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                                    </div>
                                    <div class="">
                                        <label for="amount">Price : </label>
                                        <input type="text" id="amount" readonly="">
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Product Brand</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Apple</a>
                                    </li>
                                    <li>
                                        <a href="#">Asus</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Gionee</a>
                                    </li>
                                    <li>
                                        <a href="#">Micromax</a>
                                    </li>
                                    <li>
                                        <a href="#">Samsung</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>



                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
