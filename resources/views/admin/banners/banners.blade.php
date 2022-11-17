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
         <h3 class="card-title">Banners</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            Thêm Banners
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
                     Image
                  </th>
                  <th>
                     Link
                  </th>
                  <th>
                    Position
                  </th>
               </tr>
            </thead>
            <form action={{route('banners.store')}} method="POST" >
               {{-- @method('post') --}}
               @csrf
               <tbody>
                  <td>
                     <input type="text" name="id" class="form-control" placeholder="Nhập Mã banners" value="">
                  </td>
                  <td>
                     <input type="text" name="image" class="form-control" placeholder="Image" value="">
                  </td>
                  <td>
                     <input type="text" name="link"class="form-control" placeholder="Link" value="">
                  </td>
                  <td>
                     <input type="text" name="position" class="form-control" placeholder="Nhập Vị Trí"value="">
                  </td>
               </tbody>
               <td>
                  <button class="btn btn-success btn-sm" type="submit">Thêm banners</button>
               </td>
            </form>
        </table>

      </div>

   </div>
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Banners</h3>
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
                    Image
                 </th>
                 <th>
                    Link
                 </th>
                 <th>
                   Position
                 </th>
                  <th>
                     Công Cụ
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach($banners as $row)
               <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->image}}</td>
                  <td>{{$row->link}}</td>
                  <td>{{$row->position}}</td>
                  <td >
                     <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="/admin/banners/edit/{{$row->id}}">
                           <div type="button" class="btn btn-warning btn-sm" >
                              Edit
                           </div>
                        </a>
                        <form method="POST" action="/admin/banners/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
   </div>
</section>
@endsection

