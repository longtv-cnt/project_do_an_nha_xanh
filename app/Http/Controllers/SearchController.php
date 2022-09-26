<?php

namespace App\Http\Controllers;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $products = RealEstate::where('tensp', 'LIKE', "%{$query}%")
                ->orWhere('chieudai', 'LIKE', "%{$query}%")
                ->orWhere('chieurong', 'LIKE', "%{$query}%")->get();
            $output = ' <div class="row">
                           <p>Tìm thấy '.$products->count().' sản phẩm</p>
                            <div class="col-md-12" style="display: flex;flex-wrap:wrap">';
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
            $output .= '</div>
                     </div>';
//            echo $output;
            return Response($output);

        }
    }

}

