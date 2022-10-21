<?php

namespace App\Http\Controllers;
use App\Models\Duan;
use App\Models\RealEstate;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    public function filter(Request $request)
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        if($request->sapxep == 1){
            $products = DB::table('sanpham_bds')
                ->orwhere('tensp','like', "%{$request->tensp}%")
                ->orwhere('chieudai','like', "%{$request->chieudai}%")
                ->orwhere('chieurong','like', "%{$request->chieurong}%")
                ->orwhere('sophongngu','like', "%{$request->sophongngu}%")
                ->orwhere('sophongtam','like', "%{$request->sophongtam}%")
                ->orwhere('huong','like', "%{$request->huongnha}%")
                ->orwhere('diachi','like', "%{$request->diachi}%")
                ->orderBy('giatien','ASC')
                ->get();
            $sapxep = 'Giá tăng dần';
        }else{
            $products = DB::table('sanpham_bds')
                ->orwhere('tensp','like', "%{$request->tensp}%")
                ->orwhere('chieudai','like', "%{$request->chieudai}%")
                ->orwhere('chieurong','like', "%{$request->chieurong}%")
                ->orwhere('sophongngu','like', "%{$request->sophongngu}%")
                ->orwhere('sophongtam','like', "%{$request->sophongtam}%")
                ->orwhere('huong','like', "%{$request->huongnha}%")
                ->orwhere('diachi','like', "%{$request->diachi}%")
                ->orderBy('giatien','DESC')
                ->get();
            $sapxep = 'Giá giảm dần';
        }

        $title = 'Tất cả dự án';
        return view('index', compact('products','duans','typeproducts', 'title', 'sapxep'));
    }

    public function loaibds($maloai, $maduan)
    {
        $products = DB::table('sanpham_bds')
            ->where('maloai',$maloai)
            ->where('maduan',$maduan)
            ->orderBy('giatien','ASC')
            ->get();
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $title = $duans[$maduan-1]->tenduan;
        $loaibds = $typeproducts[$maloai-1]->tenloai;
        $sapxep = 'Giá tăng dần';
        return view('index', compact('products','duans','typeproducts', 'title', 'loaibds', 'sapxep'));
    }

    public function duan($maduan)
    {
        $products = DB::table('sanpham_bds')
            ->where('maduan',$maduan)
            ->orderBy('giatien','ASC')
            ->get();
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $title = $duans[$maduan-1]->tenduan;
        $loaibds = 'Tất cả sản phẩm';
        $sapxep = 'Giá tăng dần';
        return view('index', compact('products','duans','typeproducts', 'title', 'loaibds', 'sapxep'));
    }

    public function gioithieu($maloai)
    {
        if($maloai == 1){
            $contents = 'nhà riêng';
        }
        if($maloai == 2){
            $contents = 'aa';
        }
        if($maloai == 3){
            $contents = 'aa';
        }
        if($maloai == 4){
            $contents = 'aa';
        }
        if($maloai == 5){
            $contents = 'aa';
        }
        if($maloai == 6){
            $contents = 'aa';
        }
        if($maloai == 7){
            $contents = 'aa';
        }
        if($maloai == 8){
            $contents = 'aa';
        }
        if($maloai == 9){
            $contents = 'aa';
        }
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('gioithieu', compact('contents','duans','typeproducts'));
    }

    public function lienhe()
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('lienhe',compact('duans','typeproducts'));
    }
    public function tuyendung()
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('tuyendung',compact('duans','typeproducts'));
    }
    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $products = RealEstate::where('maduan','like', "%{$query}%")
                ->orwhere('maloai', 'like', "%{$query}%")
                ->orwhere('tensp', 'like', "%{$query}%")
                ->orwhere('chieudai','like', "%{$query}%")
                ->orwhere('chieurong','like', "%{$query}%")
                ->orwhere('sophongngu','like', "%{$query}%")
                ->orwhere('sophongtam','like', "%{$query}%")
                ->orwhere('huong','like', "%{$query}%")
                ->orwhere('diachi','like', "%{$query}%")
                ->get();
            $output = ' <p>Tìm thấy '.$products->count().' sản phẩm</p>
                            <div class="row">';
            foreach($products as $product)
            {
                $output .= '
                        <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">';
                if(file_exists(public_path('uploads/product/'.$product->anhsp))){
                    $output .= '<img class="card-img" src="uploads/product/'.$product->anhsp.'" alt="" height="100px"></img>';
                }
                else{
                    $output .= '<img class="card-img" src="'.$product->anhsp.'" alt="" height="100px"></img>';
                }
                $output .='    <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>'.$product->tensp.'</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">'.$product->giatien.'  đồng</span>
                                            <del>'.$product->giatien.'  đồng</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
               ';
            }
            $output .= '</div>';
//            echo $output;
            return Response($output);

        }
    }

}

