<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết</title>
</head>
<body>
    <h5>
        Chi tiết sản phẩm

    </h5>
    <div>
        <p>Tên sản phẩm: {{$product->tensp}}</p>
        <p>Giá sản phẩm: {{$product->giatien}}</p>
        <p>Ảnh sản phẩm: <img src="{!!  asset($product->anhsp)!!}" alt="" width="100px"></p>

</html>
