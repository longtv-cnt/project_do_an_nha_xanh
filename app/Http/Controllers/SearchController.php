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
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        if($maloai == 1){
            $contents = $tintuc[$maloai-1]->noidung;
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
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return Response($contents);
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
            $output = '
                     <div class="col-xs-12 col-md-7 col-md pull-left mgb15">
                        <div id="ucRaoVat_pnlTitle">
                            <div class="mgt0 clearfix titH3 bold500 tit_box"><h1 class="font-size-18px mg0 line-height-26px display-inline"><span class="tit_span text-uppercase">KẾT QUẢ TÌM KIẾM</span></h1>
                                <span class="link_home hidden-xs">
                                </span>
                            </div>
                        </div>
                        <div id="ucRaoVat_pnlSdt" class="pnlSdt mgt10">
                            <fieldset class="bd pd10 UserDt bg_full2 mgb15">
                                <legend class="bold">Tìm thấy ' . $products->count() . ' sản phẩm theo từ khóa ' . $query . '</legend>
                            </fieldset>
                        </div>
                        <div id="ucRaoVat_pnlalert">
                            Nếu bạn không thấy thông tin vui lòng kiểm tra lại lọc tìm kiếm thông tin hoặc liên hệ hỗ trợ: 0936.601.601
                        </div>
                        <span id="ucRaoVat_lblPage" class="lpg clearfix text-center pdt15"></span>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">';
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
                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền: ' . $product->giatien . ' đồng</strong></span></p>

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
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
//        if (isset($request)) {
            $products = DB::table('sanpham_bds as p');
            if ($request->sapxep == '1') {
                if (isset($request->maloai)) {
                    $products->where('p.maloai', $request->maloai);
                }
                if(isset($request->maduan)) {
                    $products->where('p.maduan', $request->maduan);;
                }
                if (isset($request->huongnha)) {
                    $products->where('p.huong', $request->huongnha);
                }
                if (isset($request->diachi)) {
                    $products->where('p.diachi', $request->diachi);
                }
                if (isset($request->tensp)) {
                    $products->orwhere('p.tensp', 'like', "%{$request->tensp}%");
                }
                if (isset($request->giatien)) {
                    $price = explode("-",$request->giatien);
                    $start = $price[0];
                    $end = $price[1];
                    //echo "price is selected";
                    $products
                        ->where('p.giatien', ">=", $start)
                        ->where('p.giatien', "<=", $end);

                }
                $products->orderBy('p.giatien', 'ASC');
                $sapxep = 'Giá tăng dần';
            }
            else {
                if (isset($request->maloai)) {
                    $products->where('p.maloai', $request->maloai);
                }
                if(isset($request->maduan)) {
                    $products->where('p.maduan', $request->maduan);;
                }
                if (isset($request->huongnha)) {
                    $products->where('p.huong', $request->huongnha);
                }
                if (isset($request->diachi)) {
                    $products->where('p.diachi', $request->diachi);
                }
                if (isset($request->tensp)) {
                    $products->orwhere('p.tensp', 'like', "%{$request->tensp}%");
                }
                if (isset($request->giatien)) {
                    $price = explode("-",$request->giatien);
                    $start = $price[0];
                    $end = $price[1];
                    $products
                        ->where('p.giatien', ">=", $start)
                        ->where('p.giatien', "<=", $end);
                }
                $products->orderBy('p.giatien', 'DESC');
                $sapxep = 'Giá giảm dần';
            }
            $products = $products->get();
            $output = '
                     <div class="col-xs-12 col-md-7 col-md pull-left mgb15">
                        <div id="ucRaoVat_pnlTitle">
                            <div class="mgt0 clearfix titH3 bold500 tit_box"><h1 class="font-size-18px mg0 line-height-26px display-inline"><span class="tit_span text-uppercase">KẾT QUẢ TÌM KIẾM</span></h1>
                                <span class="link_home hidden-xs">
                                </span>
                            </div>
                        </div>
                        <div id="ucRaoVat_pnlSdt" class="pnlSdt mgt10">
                            <fieldset class="bd pd10 UserDt bg_full2 mgb15">
                                <legend class="bold">Tìm thấy ' . $products->count() . ' sản phẩm theo tiêu chí</legend>
                                Tỉnh thành : ' .$request ->diachi. '<br>';
                 if (isset($request->maloai)&&isset($request->maduan)) {
                    $loaibds = $typeproducts[$request->maloai-1]->tenloai;
                    $tduan = $duans[$request->maduan-1]->tenduan;
                    $output .='Loại bất động sản : ' .$loaibds. '<br>
                               Dự án : ' .$tduan. '<br>';
                }
                else if(isset($request->maloai)&&empty($request->maduan)) {
                    $loaibds = $typeproducts[$request->maloai-1]->tenloai;
                    $tduan = '';
                    $output .='Loại bất động sản : ' .$loaibds. '<br>
                               Dự án : ' .$tduan. '<br>';
                }
                else if(empty($request->maloai)&&isset($request->maduan)) {
                    $tduan = $duans[$request->maduan-1]->tenduan;
                    $loaibds = '';
                    $output .='Loại bất động sản : ' .$loaibds. '<br>
                               Dự án : ' .$tduan. '<br>';
                }
                $output .= '    Hướng : ' .$request ->huongnha. '<br>
                                Từ khóa : ' .$request ->tensp. '<br>';
                if (isset($request->giatien)) {
                    $output .= '    Giá tiền : Từ  ' .explode("-",$request->giatien)[0]. ' Đến ' .explode("-",$request->giatien)[1]. ' đồng<br>';

                }

                $output .= '   Sắp xếp theo : ' .$sapxep. '
                            </fieldset>
                        </div>
                        <div id="ucRaoVat_pnlalert">
                            Nếu bạn không thấy thông tin vui lòng kiểm tra lại lọc tìm kiếm thông tin hoặc liên hệ hỗ trợ: 0936.601.601
                        </div>
                        <span id="ucRaoVat_lblPage" class="lpg clearfix text-center pdt15"></span>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">';
            foreach ($products as $product) {
                $output .= '
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1631612444151">
                                        <div class="wpb_wrapper">
                                            <p style="text-align: center;">
                                                <span style="font-size: 12pt; color: #0000ff;">
                                                    <strong>
                                                    <a href="/chitiet' . $product->id . '" class="mask">';
                if (file_exists(public_path('uploads/product/' . $product->anhsp)))
                    $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="uploads/product/' . $product->anhsp . '" data-src="uploads/product/' . $product->anhsp . '" alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset="uploads/product/' . $product->anhsp . '" 800w, "uploads/product/' . $product->anhsp . '" 300w, "uploads/product/' . $product->anhsp . '" 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="uploads/product/' . $product->anhsp . '" 800w, "uploads/product/' . $product->anhsp . '" 300w, "uploads/product/' . $product->anhsp . '" 768w"></img>';
                else
                    $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src=' . $product->anhsp . ' data-src=' . $product->anhsp . ' alt="Bến du thuyền Aqua Marina" width="800" height="439" data-srcset=' . $product->anhsp . '  800w, ' . $product->anhsp . '  300w,  ' . $product->anhsp . '  768w" sizes="(max-width: 800px) 100vw, 800px" srcset= ' . $product->anhsp . '  800w,  ' . $product->anhsp . '  300w,  ' . $product->anhsp . ' 768w"></img>';
                $output .= '</a>
                                                   </strong>
                                                </span>
                                            </p>
                                            <p style="text-align: center;"><span style="color: #ffffff; font-size: medium;"><span style="caret-color: #0000ff;"><b>' . $product->tensp . '</b></span></span></p>
                                            <p style="text-align: center;"><span style="font-size: 12pt; color: #ffffff;"><strong>Giá tiền: ' . $product->giatien . ' đồng</strong></span></p>

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
//        }
    }


}


