<?php

namespace App\Http\Controllers;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function showFormSearch()
    {
        $products = RealEstate::all();
        return view('search', compact('products'));
    }
    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $products = RealEstate::where('tensp', 'LIKE', "%{$query}%")
                ->orWhere('chieudai', 'LIKE', "%{$query}%")
                ->orWhere('chieurong', 'LIKE', "%{$query}%")->get();
            $output = '<div class="container mt-5" >
                         <div class="row">
                           <p>Tìm thấy '.$products->count().' sản phẩm</p>
                            <div class="col-md-12" style="display: flex;flex-wrap:wrap">';
            foreach($products as $product)
            {
                $output .= '
                <div class="col-md-3" >
                    <div class="card text-left"style="height: 18rem; whith: 6.2rem;" >
                         <img class="card-img-top" src="{{'.$product->anhsp.'}}" alt="" height="70%" >
                              <div class="card-body">
                                  <h4 class="card-title">'.$product->tensp.'</h4>
                                      <p class="card-text">'.$product->giatien.' đồng</p>
                                  </div>
                               </div>
                          </div>
               ';
            }
            $output .= '</div>
                     </div>
                   </div>';
//            echo $output;
            return Response($output);

        }
    }

}
