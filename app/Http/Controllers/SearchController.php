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

    public function loaibds( Request $request,$maloai)
    {
        $products = DB::table('sanpham_bds')
            ->where('maloai',$maloai)
            ->orderBy('giatien','ASC')
            ->get();
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $products = RealEstate::where([
            ['maduan', $request->maduan],
            ['maloai', $request->maloai],
            ['tensp', $request->tensp],
            ['chieudai', $request->chieudai],
            ['chieurong', $request->chieurong],
            ['sophongngu', $request->sophongngu],
            ['sophongtam', $request->sophongtam],
            ['huong', $request->huongnha],
            ['diachi', $request->diachi],
        ])->get();
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
        $sapxep = 'Giá tăng dần';
        return view('index', compact('products','duans','typeproducts', 'title', 'sapxep'));
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
                                    <div class="product-img">

                                            <img class="card-img" src="uploads/product/'.$product->anhsp.'" alt="" height="150px">

                                        <div class="p_icon">
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
                                            <span class="mr-4">'.number_format($product->giatien).'  đồng</span>
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

