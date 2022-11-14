@extends('admin.layouts.admin')
@section('title')
    <title>Phản Hồi</title>
@endsection
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Phản Hồi</h3>
                </div>
                <div class="card-body p-0">

                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Bulk action</option>
                                <option value="1">Delete selected</option>
                                <option value="2">Bulk edit</option>
                                <option value="3">Export</option>
                            </select>
                            <button class="btn btn-sm btn-default">Apply</button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <!--                      --><?php
                        //                      $message = Session::get('message');
                        //                      if($message){
                        //                          echo '<span class="text-alert">'.$message.'</span>';
                        //                          Session::put('message',null);
                        //                      }
                        //                      ?>
                        <table class="table table-striped b-t b-light">
                            <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>
                                    ID
                                </th>
                                <th>
                                    ID Người Dùng
                                </th>
                                <th>
                                    Tên Sản Phẩm
                                </th>
                                <th>
                                    Comment
                                </th>
                                <th>
                                    Ngày Tạo
                                </th>
                                <th>
                                    Ngày Cập Nhật
                                </th>
                                <th>
                                    Công Cụ
                                </th>

                                <th style="width:30px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($phanhoi as $row)
                                <tr>
                                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->user_id}}</td>
                                    <td><a href="{{URL::to('/chitiet'.$row->product->id)}}" target="_blank">{{$row->product->tensp}}</a></td>
                                    <td>{{$row->comment}}
                                        <br><textarea class="form-control reply_comment" rows="3"></textarea>
                                        <br><button class="btn btn-default btn-xs btn-reply-comment">Trả lời bình luận</button>
                                    </td>
                                    <td>{{$row->ngaytao}}</td>
                                    <td>{{$row->ngaycapnhat}}</td>

                                    <td >
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a href="/phanhoi/edit/{{$row->id}}">
                                                <div type="button" class="btn btn-warning btn-sm" >
                                                    Edit
                                                </div>
                                            </a>
                                            <form method="POST" action="/phanhoi/destroy/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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


