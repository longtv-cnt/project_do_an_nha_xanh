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
                                        <ul class="list-rep">
                                            @foreach($phanhoi_rep as $rep)
                                                @if($rep->comment_parent==$row->id)

                                                    <li>Trả lời: {{$rep->comment}}</li>
                                                @endif

                                            @endforeach
                                        </ul>
                                        <form action={{route('phanhoi.store')}} method="POST" >
                                            @csrf
                                            <input type="hidden" name="user_id1" class="user_id1" value="{{$row->user_id}}">
                                            <input type="hidden" name="comment_product_id1" class="comment_product_id1" value="{{$row->product->id}}">
                                            <input type="hidden" name="comment_id1" class="comment_id1" value="{{$row->id}}">
                                            <textarea name="comment1" class="comment1" rows="3" value=""></textarea><br>
                                            <button class="btn btn-success btn-sm" type="submit">Trả lời</button>
                                        </form>
                                    </td>
                                    <td>{{$row->ngaytao}}</td>
                                    <td>{{$row->ngaycapnhat}}</td>

                                    <td >
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <div class="card-body">
                                                <a onclick="return confirm('Bạn có thực sự muốn xóa?')" class="btn btn-danger"
                                                   href="{{route('phanhoi.delete',
                                                       ['id'=>$row->id])}}">
                                                    <i class="fa fa-trash"></i></a>
                                            </div>
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


