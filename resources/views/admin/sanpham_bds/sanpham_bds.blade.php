@extends('admin.layouts.admin')
@section('title')
    <title>Sản Phẩm Bất Động Sản</title>
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm Sản Phẩm Bất Động Sản</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            Thêm Sản Phẩm Bất Động Sản
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped projects">
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


                            </tr>
                        </thead>
                        <form action={{ route('sanpham_bds.store') }} method="POST" enctype="multipart/form-data">
                            {{-- @method('post') --}}
                            @csrf
                            <tbody>
                                <td>
                                    <input type="text" name="id" class="form-control" placeholder="Nhập Mã Sản Phẩm"
                                        value="">
                                </td>
                                <td>
                                    <select name="maduan" id="maduan">
                                        <option value="">Chọn Dự Án</option>
                                        @foreach ($duan as $row)
                                            <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->tenduan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select name="maloai" id="maloai">
                                        <option value="">Chọn Mã Loại Sản Phẩm</option>
                                        @foreach ($loaisp as $row)
                                            <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->tenloai }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="tensp"class="form-control" placeholder="Nhập Tên Sản Phẩm"
                                        value="">
                                </td>


                            </tbody>

                            <thead>
                                <tr>

                                    <th>
                                        Slug
                                    </th>
                                    <th>
                                        Giá Tiền
                                    </th>
                                    <th>
                                        Ảnh Sản Phẩm
                                    </th>
                                    <th>
                                        Hướng
                                    </th>
                                </tr>
                            </thead>

                                <tbody>

                                    <td>
                                        <input type="text" name="slug" class="form-control"
                                            placeholder="Slug"value="">
                                    </td>
                                    <td>
                                        <input type="text" name="giatien" class="form-control"
                                            placeholder="Nhập Giá Tiền"value="">
                                    </td>
                                    <td>
                                        <input type="file" class="form-control" id="anhsp" name="anhsp"
                                            accept="image/*"multiple>
                                        <span id="error_gallery "></span>
                                    </td>
                                    <td>
                                        <select name="huong" id="huong">
                                            <option value="">Chọn hướng</option>
                                            <option value="1">Đông</option>
                                            <option value="2">Tây</option>
                                            <option value="3">Nam</option>
                                            <option value="4">Bắc</option>
                                            <option value="5">Đông-Nam</option>
                                            <option value="6">Đông-Bắc</option>
                                            <option value="7">Tây-Nam</option>
                                            <option value="8">Tây-Bắc</option>
                                        </select>
                                    </td>
                                </tbody>

                                <thead>
                                    <tr>

                                        <th>
                                            Chiều Dài
                                        </th>
                                        <th>
                                            Chiều Rộng
                                        </th>
                                        <th>
                                            Số Phòng Tắm
                                        </th>
                                        <th>
                                            Số Phòng Ngủ
                                        </th>
                                    </tr>
                                </thead>

                                    <tbody>

                                        <td>
                                            <input type="text" name="chieudai" class="form-control"
                                                placeholder="Nhập Chiều Dài"value="">
                                        </td>
                                        <td>
                                            <input type="text" name="chieurong" class="form-control"
                                                placeholder="Nhập Chiều Rộng"value="">
                                        </td>
                                        <td>
                                            <input type="text" name="sophongtam" class="form-control"
                                                placeholder="Nhập Số Phòng Tắm"value="">
                                        </td>
                                        <td>
                                            <input type="text" name="sophongngu" class="form-control"
                                                placeholder="Nhập Số Phòng Ngủ"value="">
                                        </td>

                                    </tbody>

                                    <thead>
                                        <tr>

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
                                        </tr>
                                    </thead>

                                        <tbody>

                                            <td>
                                                <input type="text" name="xetduyet" class="form-control"
                                                    placeholder="Xét Duyệt"value="">
                                            </td>
                                            <td>
                                                <select name="diachi" id="diachi">
                                                    <option selected="selected" value="">Tỉnh thành</option>
                                                    <option value="Hải Phòng">Hải Phòng</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                                    <option value="TP-HCM">TP-HCM</option>
                                                    <option value="An Giang">An Giang</option>
                                                    <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                                                    <option value="Bình Dương">Bình Dương</option>
                                                    <option value="Bình Thuận">Bình Thuận</option>
                                                    <option value="Bình Định">Bình Định</option>
                                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                                    <option value="Bắc Giang">Bắc Giang</option>
                                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                                    <option value="Bến Tre">Bến Tre</option>
                                                    <option value="Cao Bằng">Cao Bằng</option>
                                                    <option value="Cà Mau<">Cà Mau</option>
                                                    <option value="Cần Thơ">Cần Thơ</option>
                                                    <option value="Gia Lai">Gia Lai</option>
                                                    <option value="Hoà Bình">Hoà Bình</option>
                                                    <option value="Hà Giang">Hà Giang</option>
                                                    <option value="Hà Nam">Hà Nam</option>
                                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                    <option value="Hưng Yên">Hưng Yên</option>
                                                    <option value="Hải Dương">Hải Dương</option>
                                                    <option value="Khánh Hoà">Khánh Hoà</option>
                                                    <option value="Kiên Giang">Kiên Giang</option>
                                                    <option value="Kon Tum">Kon Tum</option>
                                                    <option value="Lai Châu">Lai Châu</option>
                                                    <option value="Long An">Long An</option>
                                                    <option value="Lào Cai">Lào Cai</option>
                                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                                    <option value="Ninh Bình">Ninh Bình</option>
                                                    <option value="Móng Cái">Móng Cái</option>
                                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                                    <option value="Phan Rang">Phan Rang</option>
                                                    <option value="Phan Thiết">Phan Thiết</option>
                                                    <option value="Quảng Bình">Quảng Bình</option>
                                                    <option value="Quảng Nam">Quảng Nam</option>
                                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                                    <option value="Quảng Trị">Quảng Trị</option>
                                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                                    <option value="Sơn La">Sơn La</option>
                                                    <option value="Thanh Hoá">Thanh Hoá</option>
                                                    <option value="Thái Bình">Thái Bình</option>
                                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                    <option value="Tiền Giang">Tiền Giang</option>
                                                    <option value="Trà Vinh">Trà Vinh</option>
                                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                                    <option value="Tây Ninh">Tây Ninh</option>
                                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                    <option value="Yên Bái">Yên Bái</option>
                                                    <option value="Điện Biên">Điện Biên</option>
                                                    <option value="Đắc Lắk">Đắc Lắk</option>
                                                    <option value="Đắc Nôn">Đắc Nông</option>
                                                    <option value="Đồng Nai">Đồng Nai</option>
                                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                                    <option value="">Tất cả tỉnh thành</option>
                                                </select>
                                            </td>

                                            <td>
                                                <input type="text" name="lienhe" class="form-control"
                                                    placeholder="Liên Hệ"value="">
                                            </td>
                                            <td>
                                                <input type="text" name="nhaxanh" class="form-control"
                                                    placeholder="Nhà Xanh"value="">
                                            </td>



                                        </tbody>

                                        <td> <button class="btn btn-success btn-lg btn-block" type="submit">Thêm Sản
                                                Phẩm</button></td>
                            <td>
                                <input type="hidden" name="daban" class="form-control"
                                       value="0">
                            </td>
                                    </form>




                    </table>

                </div>
            </div>

            <!-- /.card-body -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sản Phẩm Bất Động Sản</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
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
                                {{-- <th>
                            Hướng
                        </th>
                        <th>
                            Chiều Dài
                        </th>
                        <th>
                            Chiều Rộng
                        </th> --}}
                                {{-- <th>
                            Số Phòng Tắm
                        </th>
                        <th>
                            Số Phòng Ngủ
                        </th> --}}
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
                            @foreach ($sanpham_bds as $row)
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
                                    <td>{{ $row->xetduyet }}</td>
                                    <td>{{ $row->diachi }}</td>
                                    <td>{{ $row->lienhe }}</td>
                                    <td>{{ $row->nhaxanh }}</td>
                                    <td>{{ $row->daban }}</td>
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


                                            <a href="/admin/sanpham_bds/edit/{{ $row->id }}">
                                                <div type="button" class="btn btn-warning btn-sm">
                                                    Edit
                                                </div>
                                            </a>

                                    <form method="POST" action="/admin/sanpham_bds/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"  type="submit">Xóa</button>
                                    </form>
                                </div>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
    </div>
    <!-- /.card -->
    </div>
      </div>
    </section>
      @endsection
