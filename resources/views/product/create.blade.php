@extends('layout.app')
@include('layout.top-menu')
@include('layout.nav')


@section('title', 'Đăng tin')
@section('content')
{{-- form đăng bài --}}
<div class="container" style="margin-top:4rem " >
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Đăng tin</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="tensp" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="">Giá tiền</label>
                            <input type="number" class="form-control" name="giatien" placeholder="Nhập giá tiền">
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="anhsp" placeholder="Nhập ảnh sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="mota" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" name="địa chỉ" rows="3" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                            <button type="submit"> Đăng sản phẩm</button>

                            @endsection
