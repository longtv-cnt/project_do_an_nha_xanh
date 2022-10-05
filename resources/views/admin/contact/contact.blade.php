@extends('admin.layouts.admin')
@section('title')
<title>Contact</title>
@endsection
@section('content')
<section class="content">
   <div class="content-wrapper">
   <!-- Default box -->
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Contact</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            Thêm Contact
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
                     ID
                  </th>
                  <th>
                     Subject
                  </th>
                  <th>
                     Tên
                  </th>
                  <th>
                     Số Điện Thoại
                  </th>
                  <th>
                     Message
                  </th>
               </tr>
            </thead>
            <form action={{route('contact.store')}} method="POST" >
               {{-- @method('post') --}}
               @csrf
               <tbody>
                  <td>
                     <input type="text" name="id" class="form-control" placeholder="Nhập Mã Contact" value="">
                  </td>
                  <td>
                     <input type="text" name="subject" class="form-control" placeholder="Nhập Subject" value="">
                  </td>
                  <td>
                     <input type="text" name="ten"class="form-control" placeholder="Nhập Tên" value="">
                  </td>
                  <td>
                     <input type="text" name="sdt" class="form-control" placeholder="Nhập Số Điện Thoại"value="">
                  </td>
                  <td>
                     <input type="text" name="message"  class="form-control" placeholder="Nhập Tin Nhắn"value="">
                  </td>
               </tbody>
               <td>
                  <button class="btn btn-success btn-sm" type="submit">Thêm Contact</button>
               </td>
            </form>
        </table>

      </div>

   </div>
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Contact</h3>
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
                     ID
                  </th>
                  <th>
                     Subject
                  </th>
                  <th>
                     Tên
                  </th>
                  <th>
                     Số Điện Thoại
                  </th>
                  <th>
                     Message
                  </th>
                  <th>
                     Công Cụ
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach($contact as $row)
               <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->subject}}</td>
                  <td>{{$row->ten}}</td>
                  <td>{{$row->sdt}}</td>
                  <td>{{$row->message}}</td>
                  <td >
                     <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="/contact/edit/{{$row->id}}">
                           <div type="button" class="btn btn-warning btn-sm" >
                              Edit
                           </div>
                        </a>
                        <form method="POST" action="/contact/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
