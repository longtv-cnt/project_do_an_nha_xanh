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
                                                    <option value="">Tỉnh thành</option>
                                                    <option selected="selected" value="2">Hải Phòng</option>
                                                    <option value="3">Hà Nội</option>
                                                    <option value="4">Đà Nẵng</option>
                                                    <option value="5">TP-HCM</option>
                                                    <option value="6">An Giang</option>
                                                    <option value="7">Bà Rịa Vũng tàu</option>
                                                    <option value="8">Bình Dương</option>
                                                    <option value="9">Bình thuận</option>
                                                    <option value="10">Bình Định</option>
                                                    <option value="11">Bạc Liêu</option>
                                                    <option value="12">Bắc Giang</option>
                                                    <option value="13">Bắc Kạn</option>
                                                    <option value="14">Bắc Ninh</option>
                                                    <option value="15">Bến Tre</option>
                                                    <option value="16">Cao Bằng</option>
                                                    <option value="17">Cà Mau</option>
                                                    <option value="18">Cần Thơ</option>
                                                    <option value="19">Gia Lai</option>
                                                    <option value="20">Hoà Bình</option>
                                                    <option value="21">Hà Giang</option>
                                                    <option value="22">Hà Nam</option>
                                                    <option value="23">Hà Tĩnh</option>
                                                    <option value="24">Hưng Yên</option>
                                                    <option value="25">Hải Dương</option>
                                                    <option value="26">Khánh Hoà</option>
                                                    <option value="27">Kiên Giang</option>
                                                    <option value="28">Kon Tum</option>
                                                    <option value="29">Lai Châu</option>
                                                    <option value="30">Long An</option>
                                                    <option value="31">Lào Cai</option>
                                                    <option value="32">Lâm Đồng</option>
                                                    <option value="33">Lạng Sơn</option>
                                                    <option value="34">Ninh Bình</option>
                                                    <option value="62">Móng Cái</option>
                                                    <option value="35">Ninh Thuận</option>
                                                    <option value="36">Phan Rang</option>
                                                    <option value="37">Phan Thiết</option>
                                                    <option value="38">Quảng Bình</option>
                                                    <option value="39">Quảng Nam</option>
                                                    <option value="40">Quảng Ngãi</option>
                                                    <option value="41">Quảng Ninh</option>
                                                    <option value="42">Quảng Trị</option>
                                                    <option value="43">Sóc Trăng</option>
                                                    <option value="44">Sơn La</option>
                                                    <option value="45">Thanh Hoá</option>
                                                    <option value="46">Thái Bình</option>
                                                    <option value="47">Thái Nguyên</option>
                                                    <option value="48">Thừa Thiên Huế</option>
                                                    <option value="49">Tiền Giang</option>
                                                    <option value="50">Trà Vinh</option>
                                                    <option value="51">Tuyên Quang</option>
                                                    <option value="52">Tây Ninh</option>
                                                    <option value="53">Vĩnh Long</option>
                                                    <option value="54">Vĩnh Phúc</option>
                                                    <option value="55">Yên Bái</option>
                                                    <option value="56">Điện Biên</option>
                                                    <option value="57">Đắc Lắk</option>
                                                    <option value="58">Đắc Nông</option>
                                                    <option value="59">Đồng Nai</option>
                                                    <option value="60">Đồng Tháp</option>
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
                                        @if (file_exists(public_path('sanpham/' . $row->anhsp)))
                                            <img class="card-img" src="{{asset( 'sanpham/').'/' . $row->anhsp }}"
                                                alt="" height="100px">
                                        @else
                                            <img class="card-img" src="{{ 'sanpham/' . $row->anhsp }}"
                                                alt="" height="100px">
                                        @endif
                                    </td>
                                    <td>{{ $row->xetduyet }}</td>
                                    <td>{{ $row->diachi }}</td>
                                    <td>{{ $row->lienhe }}</td>
                                    <td>{{ $row->nhaxanh }}</td>
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
