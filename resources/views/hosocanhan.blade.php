@extends('layout.app')
@section('title', 'Hồ sơ cá nhân')

@section('content')
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                        <p style="text-align: center;"><span style="color: #008000; font-size: 16pt;"><strong><span style="font-family: verdana, geneva, sans-serif;">Hồ sơ cá nhân</span></strong></span></p>
                        <p style="text-align: center;"><span style="color: #008000; font-size: 16pt;"><span style="font-family: verdana, geneva, sans-serif;">Tên tài khoản:{{$user_name}}</span></span></p>

                        <p style="text-align: center;"><span style="color: #008000; font-size: 16pt;"><span style="font-family: verdana, geneva, sans-serif;">Email:{{$user_email}} </span></span></p>




                    </div>
                </div>

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <p style="text-align: center;"><span style="color: #0000ff; font-size: 18pt;"><strong><span style="font-family: verdana, geneva, sans-serif;">Các sản phẩm đã đăng</span></strong></span></p>

            <thead>
            <tr>
                <th>
                    Mã Sản Phẩm
                </th>
                <th>
                    Mã Dự Án
                </th>
                <th>
                    Mã Loại
                </th>
                <th>
                    Tên Sản Phẩm
                </th>
                {{-- <th>
                    Slug
                </th> --}}
                <th>
                    Giá Tiền
                </th>

                <th>
                    Ảnh Sản Phẩm
                </th>

                <th>
                    Xét Duyệt
                </th>
                <th>
                    Địa Chỉ
                </th>
                <th>
                    Liên Hệ
                </th>
                <th>
                    Nhà Xanh
                </th>
                <th>
                    Đã bán
                </th>
                <th>
                    Công Cụ
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->maduan }}</td>
                    <td>{{ $row->maloai }}</td>
                    <td>{{ $row->tensp }}</td>
                    <td>{{ number_format($row->giatien) }}</td>
                    <td>
                        @if (file_exists(public_path('uploads/product/' . $row->anhsp)))
                            <img class="card-img" src="{{asset( 'uploads/product/').'/' . $row->anhsp }}"
                                 alt="" height="100px">
                        @else
                            <img class="card-img" src="{{ 'uploads/product/' . $row->anhsp }}"
                                 alt="" height="100px">
                        @endif
                    </td>
                    <td>{{ $row->xetduyet==1? 'Đã xét duyệt':'Chưa xét duyệt' }}</td>
                    <td>{{ $row->diachi }}</td>
                    <td>{{ $row->lienhe }}</td>
                    <td>{{ $row->nhaxanh==1? 'Đạt tiêu chuẩn':'Chưa đạt' }}</td>
                    <td>{{ $row->daban==1? 'Đã bán':'Chưa bán'}}</td>
                    <td>
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    Chi Tiết
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item">Hướng : {{ $row->huong }}</a>
                                    <a class="dropdown-item">Chiều Dài: {{ $row->chieudai }}</a>
                                    <a class="dropdown-item">Chiều Rộng: {{ $row->chieurong }}</a>
                                    <a class="dropdown-item">Số Phòng Tắm: {{ $row->sophongtam }}</a>
                                    <a class="dropdown-item">Số Phòng Ngủ: {{ $row->sophongngu }}</a>
                                </div>

                            </div>
                            <a href="/hosocanhan-edit{{ $row->id }}">
                                <div type="button" class="btn btn-warning btn-sm">
                                    Edit
                                </div>
                            </a>
                        </div>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>

@endsection
