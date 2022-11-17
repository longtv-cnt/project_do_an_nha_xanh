@extends('admin.layouts.admin')
@section('title')
<title>Banners</title>
@endsection
@section('content')
<section class="content">
   <div class="content-wrapper">
   <!-- Default box -->
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Sản phẩm banners</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            Thêm sản phẩm banners
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
                       Product_id
                   </th>
                   <th>
                       Banner_id
                   </th>
                   <th>
                       Lý do
                   </th>
               </tr>
            </thead>
            <form action={{route('sanphambanners.store')}} method="POST" >
               {{-- @method('post') --}}
               @csrf
               <tbody>
                  <td>
                      <select name="product_id" id="product_id">
                          <option value="">Chọn product_id</option>
                          @foreach ($sanpham_bds as $row)
                              <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->tensp }}
                              </option>
                          @endforeach
                      </select>
                  </td>
                  <td>
                      <select name="banner_id" id="banner_id">
                          <option value="">Chọn banner_id</option>
                          @foreach ($banners as $row)
                              <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->link }}
                              </option>
                          @endforeach
                      </select>
                  </td>
                  <td>
                     <input type="text" name="lly_do" class="form-control" placeholder="Nhập lý do"value="">
                  </td>
               </tbody>
               <td>
                  <button class="btn btn-success btn-sm" type="submit">Thêm sản phẩm banners</button>
               </td>
            </form>
        </table>

      </div>

   </div>
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Sản phẩm banners</h3>
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
                     Product_id
                 </th>
                 <th>
                     Banner_id
                 </th>
                 <th>
                   Ngày bắt đầu
                 </th>
                   <th>
                       Ngày kết thúc
                   </th>
                   <th>
                       Lý do
                   </th>
                  <th>
                     Công Cụ
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach($sanphambanners as $row)
               <tr>
                  <td>{{$row->product_id}}</td>
                  <td>{{$row->banner_id}}</td>
                  <td>{{$row->ngay_bat_dau}}</td>
                   <td>{{$row->ngay_ket_thuc}}</td>
                   <td>{{$row->lly_do}}</td>
                  <td >
                     <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="/admin/sanphambanners/edit/{{$row->id}}">
                           <div type="button" class="btn btn-warning btn-sm" >
                              Edit
                           </div>
                        </a>
                        <form method="POST" action="/admin/sanphambanners/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
</section>
@endsection
</div>
