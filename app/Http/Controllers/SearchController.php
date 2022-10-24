<?php

namespace App\Http\Controllers;
use App\Models\Duan;
use App\Models\RealEstate;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{

    public function loaibdsduan($maloai, $maduan)
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
    public function loaibds($maloai)
    {
        $products = DB::table('sanpham_bds')
            ->where('maloai',$maloai)
            ->orderBy('giatien','ASC')
            ->get();
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $loaibds = $typeproducts[$maloai-1]->tenloai;
        $title = 'Tất cả dự án';
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
    public function chitiet($id)
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $products = RealEstate::where('id', $id)->get();
        foreach($products as $product) {
            $title = $duans[$product->maduan - 1]->tenduan;
            $loaibds = $typeproducts[$product->maloai-1]->tenloai;
        }
        return view('chitiet',compact('products','duans','typeproducts', 'title', 'loaibds'));
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
            $output = ' <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <p>Tìm thấy '.$products->count().' sản phẩm</p>';
            foreach($products as $product)
            {
                $output .= '
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1631612444151">
                                        <div class="wpb_wrapper">
                                            <p style="text-align: center;">
                                                <span style="font-size: 12pt; color: #0000ff;">
                                                    <strong>
                                                    <a href="/chitiet'.$product->id.'" class="mask">';
                                                      if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                                                         $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="uploads/product/'.$product->anhsp.'" data-src="uploads/product/'.$product->anhsp.'" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="uploads/product/'.$product->anhsp.'" 800w, "uploads/product/'.$product->anhsp.'" 300w, "uploads/product/'.$product->anhsp.'" 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="uploads/product/'.$product->anhsp.'" 800w, "uploads/product/'.$product->anhsp.'" 300w, "uploads/product/'.$product->anhsp.'" 768w"></img>';
                                                      else
                                                         $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src='.$product->anhsp.' data-src='.$product->anhsp.' alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset='.$product->anhsp.'  800w, '.$product->anhsp.'  300w,  '.$product->anhsp.'  768w" sizes="(max-width: 800px) 100vw, 800px" srcset= '.$product->anhsp.'  800w,  '.$product->anhsp.'  300w,  '.$product->anhsp.' 768w"></img>';
                                       $output .= '</a>
                                                   </strong>
                                                </span>
                                            </p>
                                            <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>'.$product->tensp.'</b></span></span></p>
                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Quy mô rộng '.$product->giatien.' ha</strong></span></p>

                                        </div>
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
    public function filter(Request $request)
    {

//        $duans = Duan::all();
//        $typeproducts = TypeProduct::all();
//        if($request->sapxep == 1){
//            $products = DB::table('sanpham_bds')
//                ->where('maloai', $request->maloai)
//                ->where('maduan', $request->maduan)
//                ->where('chieudai', $request->chieudai)
//                ->where('chieurong', $request->chieurong)
//                ->where('huong',$request->huongnha)
//                ->where('diachi',$request->diachi)
//                ->orwhere('tensp','like', "%{$request->tensp}%")
//                ->orderBy('giatien','ASC')
//                ->get();
//            $sapxep = 'Giá tăng dần';
//        }else{
//            $products = DB::table('sanpham_bds')
//                ->where('maloai', $request->maloai)
//                ->where('maduan', $request->maduan)
//                ->where('chieudai', $request->chieudai)
//                ->where('chieurong', $request->chieurong)
//                ->where('huong',$request->huongnha)
//                ->where('diachi',$request->diachi)
//                ->orwhere('tensp','like', "%{$request->tensp}%")
//                ->orderBy('giatien','ASC')
//                ->get();
//            $sapxep = 'Giá giảm dần';
//        }
        $products = DB::table('sanpham_bds')
            ->where('tensp', 'aa')
            ->get();
//        $sapxep = 'Giá giảm dần';
//        $title = 'Kết quả tìm kiếm được';
//        $loaibds = 'Tất cả sản phẩm';
//        return view('index', compact('products','duans','typeproducts', 'title', 'loaibds', 'sapxep'));
        $output = ' <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <p>Tìm thấy '.$products->count().' sản phẩm</p>';
        foreach($products as $product)
        {
            $output .= '
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1631612444151">
                                        <div class="wpb_wrapper">
                                            <p style="text-align: center;">
                                                <span style="font-size: 12pt; color: #0000ff;">
                                                    <strong>
                                                    <a href="/chitiet'.$product->id.'" class="mask">';
            if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="uploads/product/'.$product->anhsp.'" data-src="uploads/product/'.$product->anhsp.'" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="uploads/product/'.$product->anhsp.'" 800w, "uploads/product/'.$product->anhsp.'" 300w, "uploads/product/'.$product->anhsp.'" 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="uploads/product/'.$product->anhsp.'" 800w, "uploads/product/'.$product->anhsp.'" 300w, "uploads/product/'.$product->anhsp.'" 768w"></img>';
            else
                $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src='.$product->anhsp.' data-src='.$product->anhsp.' alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset='.$product->anhsp.'  800w, '.$product->anhsp.'  300w,  '.$product->anhsp.'  768w" sizes="(max-width: 800px) 100vw, 800px" srcset= '.$product->anhsp.'  800w,  '.$product->anhsp.'  300w,  '.$product->anhsp.' 768w"></img>';
            $output .= '</a>
                                                   </strong>
                                                </span>
                                            </p>
                                            <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>'.$product->tensp.'</b></span></span></p>
                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Quy mô rộng '.$product->giatien.' ha</strong></span></p>

                                        </div>
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
//    public function sviproizvodi(){
//        $products = DB::table('products as p')->join('product_attributes as pa','p.id','=','pa.product_id')->select('p.*','pa.size')->where('p.status', 1)->groupBy('p.id');
//
//        if (isset($request->minimum_price) && isset($request->maximum_price)) {
//            $products->whereBetween('p.price', [$request->minimum_price, $request->maximum_price]);
//        }
//        if (isset($request->brand)) {
//            $products->whereIn('p.brand_id', $request->brand);
//        }
//        if (isset($request->cat)) {
//            $products->whereIn('p.category_id', $request->cat);
//        }
//        if (isset($request->orderby)) {
//            if ($request->orderby == "standardno") {
//                $products->orderBy('p.id','desc');
//            }
//            if ($request->orderby == "istaknute") {
//                $products->orderBy('p.featured','desc');
//            }
//            if ($request->orderby == "novi") {
//                $products->orderBy('p.id','desc');
//            }
//            if ($request->orderby == "cijena1") {
//                $products->orderBy('p.price','asc');
//            }
//            if ($request->orderby == "cijena2") {
//                $products->orderBy('p.price','desc');
//            }
//            if (isset($request->size)) {
//                $products->whereIn('pa.size', $request->size);
//            }
//            if (isset($request->color)) {
//                $products->whereIn('pa.color', $request->color);
//            }
//        }
//        $proizvodi = $products->paginate(15);
//        return view('products',compact('proizvodi'));
//    }

}



