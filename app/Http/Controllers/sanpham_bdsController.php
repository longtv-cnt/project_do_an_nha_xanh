<?php

namespace App\Http\Controllers;

use App\Models\Duan;
use App\Models\sanpham_bds;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\RealEstate;
use App\Models\loaisanpham;

class sanpham_bdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duan = DB::table('du_an')->select('*');
        $duan = $duan->get();
        $loaisp = DB::table('loaisp_bds')->select('*');
        $loaisp = $loaisp->get();
        $sanpham_bds = DB::table('sanpham_bds')->select('*');
        $sanpham_bds = $sanpham_bds->get();
        return view('admin.sanpham_bds.sanpham_bds', compact('loaisp','duan','sanpham_bds'));
    }

    public function sanpham()
    {
        //
        $products = DB::table('sanpham_bds')
            ->where('xetduyet', 1)
            ->orderBy('giatien','ASC')
            ->paginate(8);
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $title = 'Tất cả dự án';
        $loaibds = 'Tất cả sản phẩm';
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        $paginate = new Paginator($products, 8);
        return view('sanpham',
            compact('products','duans','typeproducts', 'title', 'loaibds','paginate', 'banners'));
    }
    public function sanphambanner($id)
    {
        //
        $products = DB::table('sanpham_bds')
            ->join('banner_product', 'sanpham_bds.id', '=', 'product_id')
            ->join('banners', 'banner_product.banner_id', '=', 'banners.id')
            ->distinct('product_id')
            ->where('banner_id', $id)
            ->where('xetduyet', 1)
            ->orderBy('giatien','ASC')
            ->paginate(8);
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $loaibds = 'Các sản phẩm';
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        $title = $banners[$id-1]->link;
        $paginate = new Paginator($products, 8);
        return view('sanphambanner',
            compact('products','duans','typeproducts', 'title', 'loaibds','paginate', 'banners'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sanpham_bds.sanpham_bds');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $sanpham_bds = new RealEstate();
        $sanpham_bds->id =$request->id;
        $sanpham_bds->maduan =$request->maduan;
        $sanpham_bds->maloai =$request->maloai;
        $sanpham_bds->tensp =$request->tensp;
        $sanpham_bds->giatien =$request->giatien;
        if ($request->hasFile('anhsp')) {
            $file = $request->file('anhsp');
            $fileName = time().$file->getClientOriginalName();

            $destinationPath = public_path('uploads/product/');
            $file->move($destinationPath, $fileName);
            $sanpham_bds->anhsp = $fileName;
        }

        $sanpham_bds->huong =$request->huong;
        $sanpham_bds->chieudai =$request->chieudai;
        $sanpham_bds->chieurong =$request->chieurong;
        $sanpham_bds->sophongtam =$request->sophongtam;
        $sanpham_bds->sophongngu =$request->sophongngu;
        $sanpham_bds->xetduyet =$request->xetduyet;
        $sanpham_bds->diachi =$request->diachi;
        $sanpham_bds->nhaxanh =$request->nhaxanh;
        $sanpham_bds->lienhe =$request->lienhe;
        $sanpham_bds->save();

        return redirect()->back();


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanpham_bds = sanpham_bds::findOrFail($id);
        return view('admin.sanpham_bds.update', compact('sanpham_bds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sanpham_bds = sanpham_bds::find($id);
        $sanpham_bds->id = $request->id;
        $sanpham_bds->maduan = $request->maduan;
        $sanpham_bds->maloai = $request->maloai;
        $sanpham_bds->tensp = $request->tensp;
        // $sanpham_bds->slug = $request->slug;
        $sanpham_bds->giatien = $request->giatien;
        $sanpham_bds->anhsp = $request->anhsp;
        $sanpham_bds->huong = $request->huong;
        $sanpham_bds->chieudai = $request->chieudai;
        $sanpham_bds->chieurong = $request->chieurong;
        $sanpham_bds->sophongtam = $request->sophongtam;
        $sanpham_bds->sophongngu = $request->sophongngu;
        $sanpham_bds->xetduyet = $request->xetduyet;
        $sanpham_bds->diachi = $request->diachi;
        $sanpham_bds->nhaxanh = $request->nhaxanh;
        $sanpham_bds->lienhe = $request->lienhe;
        $sanpham_bds->save();
        return redirect()->action([sanpham_bdsController::class,'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $sanpham_bds = sanpham_bds::find($id);
        $sanpham_bds->delete();
        return redirect()->action([sanpham_bdsController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
