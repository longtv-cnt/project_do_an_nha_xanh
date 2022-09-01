@extends('layout.app')
@section('title', 'Tìm Kiếm')

@section('content' )
    <div id="countryList">
    <div class="container mt-5" >
        <div class="row">
            <p>Tìm thấy {{ $products->count() }} sản phẩm</p>
            <div class="col-md-12" style="display: flex;flex-wrap:wrap">
                    @if ($products)
                        @foreach ($products as $product)
                            <div class="col-md-3" >
                                <div class="card text-left"style="height: 18rem;" >
                                    <img class="card-img-top" src="{{ $product->anhsp }}" alt="" height="70%" >
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $product->tensp }}</h4>
                                        <p class="card-text">{{ $product->giatien.' đồng' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection



