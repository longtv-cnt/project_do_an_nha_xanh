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
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        $loaitintuc = DB::table('loaitintuc')->select('*');
        $loaitintuc = $loaitintuc->get();
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
        return view('index', compact('products',
            'duans','typeproducts', 'title', 'loaibds', 'sapxep', 'tintuc', 'loaitintuc'));
    }

    public function duan($maduan)
    {
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        $loaitintuc = DB::table('loaitintuc')->select('*');
        $loaitintuc = $loaitintuc->get();
        $products = DB::table('sanpham_bds')
            ->where('nhaxanh', 1)
            ->where('xetduyet', 1)
            ->where('maduan',$maduan)
            ->orderBy('giatien','ASC')
            ->get();
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $title = $duans[$maduan-1]->tenduan;
        $loaibds = 'Tất cả sản phẩm';
        $sapxep = 'Giá tăng dần';
        return view('index', compact('products',
            'duans','typeproducts', 'title', 'loaibds', 'sapxep', 'tintuc', 'loaitintuc'));
    }

    public function loaibds($maloai)
    {
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        $loaitintuc = DB::table('loaitintuc')->select('*');
        $loaitintuc = $loaitintuc->get();
        $products = DB::table('sanpham_bds')
            ->where('nhaxanh', 1)
            ->where('xetduyet', 1)
            ->where('maloai',$maloai)
            ->orderBy('giatien','ASC')
            ->get();
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $loaibds = $typeproducts[$maloai-1]->tenloai;
        $title = 'Tất cả dự án';
        $sapxep = 'Giá tăng dần';
        return view('index', compact('products',
            'duans','typeproducts', 'title', 'loaibds', 'sapxep', 'tintuc', 'loaitintuc'));
    }
    public function gioithieu($maloai)
    {
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        if(isset($tintuc[$maloai-1])){
            $output = $tintuc[$maloai-1]->noidung;
        }else{
            $output = 'Chưa có bài viết';
        }
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('gioithieu', compact('output','duans','typeproducts'));
    }
    public function tuyendung()
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        if(isset($tintuc[10-1])){
            $output = $tintuc[10-1]->noidung;
        }else{
            $output = 'Chưa có bài viết';
        }
        return view('tuyendung',compact('duans','typeproducts', 'output'));
    }
    public function lienhe()
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        if(isset($tintuc[11-1])){
            $output = $tintuc[11-1]->noidung;
        }else{
            $output = 'Chưa có bài viết';
        }
        return view('lienhe',compact('duans','typeproducts', 'output'));
    }
    public function tintucchitiet($id)
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $tintuc = DB::table('tintuc')->get();
        $output =$tintuc[$id-1]->noidung;
        return view('tintuc', compact('output','duans','typeproducts'));
    }
    public function chitiet($id)
    {
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $products = RealEstate::where('id', $id)->get();
        foreach($products as $product) {
            $title = $duans[$product->maduan - 1]->tenduan;
            $loaibds = $typeproducts[$product->maloai-1]->tenloai;
            if(isset($duans[$product->maduan - 1]->mota)){
                $duan = $duans[$product->maduan - 1]->mota;
            }else{
                $duan = 'table dự án chưa có mô tả (^-^)';
            }

        }

        return view('chitiet',compact('products','duans','typeproducts', 'title', 'loaibds', 'duan'));
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
                ->orwhere('giatien','like', "%{$query}%")
                ->orwhere('huong','like', "%{$query}%")
                ->orwhere('diachi','like', "%{$query}%")
                ->paginate(8);

//            $paginate = new \Illuminate\Pagination\Paginator($products, 8);
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
                                <legend class="bold">Tìm thấy sản phẩm theo từ khóa ' . $query . '</legend>
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
                if($product->nhaxanh == 1 && $product->xetduyet == 1 ){
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
                    if (file_exists(public_path('uploads/product/'.$product->anhsp)))
                        $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src="uploads/product/'.$product->anhsp.'" data-src="uploads/product/'.$product->anhsp.'"  width="800" height="439" data-srcset="uploads/product/'.$product->anhsp.'" 800w, "uploads/product/'.$product->anhsp.'" 300w, "uploads/product/'.$product->anhsp.'" 768w" sizes="(max-width: 800px) 100vw, 800px" srcset="uploads/product/'.$product->anhsp.'" 800w, "uploads/product/'.$product->anhsp.'" 300w, "uploads/product/'.$product->anhsp.'" 768w"></img>';
                    else
                        $output .= '<img style="max-height: 300px;" loading="lazy" class="aligncenter wp-image-4167 size-full lazyloaded" src='.$product->anhsp.' data-src='.$product->anhsp.'  width="800" height="439" data-srcset='.$product->anhsp.'  800w, '.$product->anhsp.'  300w,  '.$product->anhsp.'  768w" sizes="(max-width: 800px) 100vw, 800px" srcset= '.$product->anhsp.'  800w,  '.$product->anhsp.'  300w,  '.$product->anhsp.' 768w"></img>';
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
                else{
                    $output .= '';
                }
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
        $products = DB::table('sanpham_bds as p')
            ->where('nhaxanh', 1)
            ->where('xetduyet', 1);
        if (isset($request->maloai)&&isset($request->maduan)) {
            $loaibds = $typeproducts[$request->maloai-1]->tenloai;
            $tduan = $duans[$request->maduan-1]->tenduan;
            $products->where('p.maloai', $request->maloai);
            $products->where('p.maduan', $request->maduan);
        }
        else if(isset($request->maloai)&&empty($request->maduan)) {
            $loaibds = $typeproducts[$request->maloai-1]->tenloai;
            $tduan = 'Tất cả các dự án';
            $products->where('p.maloai', $request->maloai);
        }
        else if(empty($request->maloai)&&isset($request->maduan)) {
            $tduan = $duans[$request->maduan-1]->tenduan;
            $loaibds = 'Tất cả các loại bất động sản';
            $products->where('p.maduan', $request->maduan);
        }else{
            $tduan = 'Tất cả các dự án';
            $loaibds = 'Tất cả các loại bất động sản';
        }
        if (isset($request->huongnha)) {
            $products->where('p.huong', $request->huongnha);
            $huongnha = $request->huongnha;
        }else{
            $huongnha = 'Tất cả các hướng';
        }
        if (isset($request->diachi)) {
            $products->where('p.diachi', $request->diachi);
            $diachi = $request->diachi;
        }else{
            $diachi = 'Tất cả các tỉnh thành';
        }
        if (isset($request->tensp)) {
            $products->where('p.tensp', 'like', "%{$request->tensp}%");
            $tensp = $request->tensp;
        }else{
            $tensp = 'Nhập từ khóa';
        }
        if (isset($request->giatien)) {
            $price = explode("-",$request->giatien);
            $start = $price[0];
            $end = $price[1];
            //echo "price is selected";
            $products
                ->where('p.giatien', ">=", $start)
                ->where('p.giatien', "<=", $end);
            if ($request->giatien == '0-1000000000'){
                $giatien = 'Từ 0 đồng đến 1 tỷ đồng';
            }elseif ($request->giatien == '1000000000-3000000000'){
                $giatien = 'Từ 1 đồng đến 3 tỷ đồng';
            }elseif ($request->giatien == '3000000000-5000000000'){
                $giatien = 'Từ 3 đồng đến 5 tỷ đồng';
            }elseif ($request->giatien == '5000000000-10000000000'){
                $giatien = 'Từ 5 đồng đến 100 tỷ đồng';
            }elseif ($request->giatien == '10000000000-9999999999999999999'){
                $giatien = 'Từ 100 tỷ đồng trở lên';
            }else{
                $giatien = 'Mọi giá tiền';
            }
        }else{
            $giatien = 'Mọi giá tiền';
        }
        if (isset($request->sapxep)){
            if ($request->sapxep == '1') {
                $products->orderBy('p.giatien', 'ASC');
                $sapxep = 'Giá tăng dần';
            }else{
                $products->orderBy('p.giatien', 'DESC');
                $sapxep = 'Giá giảm dần';
            }
        }else{
            $products->orderBy('p.giatien', 'DESC');
            $sapxep = 'Giá giảm dần';
        }

        $products = $products->paginate(8);
        $paginate = new \Illuminate\Pagination\Paginator($products, 8);
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
                                ';
        $output .= '    Tỉnh thành : ' .$diachi. '<br>';
        $output .= '    Loại bất động sản : ' .$loaibds. '<br>';
        $output .= '    Dự án : ' .$tduan. '<br>';
        $output .= '    Hướng :  ' .$huongnha. '<br>';
        $output .= '    Từ khóa :  ' .$tensp. '<br>';
        $output .= '    Giá tiền :  ' .$giatien. '<br>';
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
    function tintuc(Request $request)
    {

        if (isset($request->tintuc)){
            $loaitintuc = DB::table('loaitintuc')
                ->where('tenloai', $request->tintuc)
                ->get();
            foreach ($loaitintuc as $tin) {
                $tintuc = DB::table('tintuc')
                    ->where('loaitin', $tin->id)
                    ->get();
            }
            $title = $request->tintuc;
        }else{
            $tintuc = DB::table('tintuc')->select('*')
                ->get();
            $title = 'Tất cả tin tức';
        }
        $output = '
              <div id="ucRaoVat_pnlSdt" class="pnlSdt mgt10">
                            <fieldset class="bd pd10 UserDt bg_full2 mgb15">
                                <legend class="bold">' . $title . '</legend>
                            </fieldset>
                        </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">';
        foreach($tintuc as $tin)
        {
            $output .= '        <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                                    <div class="col-xs-12 col-sm-7 col-md-8 pdl10 pdr0">
                                                        <h3 class="titH5 mgb5 bold500 mgt0"><a class="c_red" href="/tintuc{id}">'.$tin->tentin.'</a></h3>
                                                        <p class="mgb5 mDesc hidden-xs">'.$tin->ngaydang.'</p>
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


