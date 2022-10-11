<?php

namespace App\Http\Controllers;
use App\Models\Duan;
use App\Models\RealEstate;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request)
    {

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

        return view('index', compact('products','duans','typeproducts'));
    }

    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $products = RealEstate::where('tensp', 'LIKE', "%{$query}%")
                ->orWhere('chieudai', 'LIKE', "%{$query}%")
                ->orWhere('chieurong', 'LIKE', "%{$query}%")->get();
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

