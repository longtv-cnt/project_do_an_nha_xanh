@extends('layout.app')
@section('title', 'Trang chủ')

@section('content')
    <div class="container" style="margin-top:4rem ">
        <div class="row">
            <p>Tìm thấy {{ $products->count() }} sản phẩm</p>
            <div class="col-md-12" style="display: flex;flex-wrap:wrap">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card text-left"style="height: 18rem;">
                            @if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                            <img class="card-img-top" src="{{ 'uploads/product/'.$product->anhsp }}" alt="" height="70%">
                            @else
                            <img class="card-img-top" src="{{ $product->anhsp }}" alt="" height="70%">
                            @endif

                            <div class="card-body">
                                <h4 class="card-title">{{ $product->tensp }}</h4>
                                <p class="card-text">{{ $product->giatien . ' đồng' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
