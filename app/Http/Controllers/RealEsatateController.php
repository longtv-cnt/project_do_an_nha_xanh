<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use App\Models\Duan;
use Illuminate\Http\Request;
use App\Models\TypeProduct;
use Illuminate\Support\Facades\DB;

class RealEsatateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = DB::table('sanpham_bds')
            ->where('nhaxanh', 1)
            ->where('xetduyet', 1)
            ->orderBy('giatien','ASC')
            ->paginate(8);
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $title = 'Tất cả dự án';
        $loaibds = 'Tất cả sản phẩm';
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->paginate(16);
        $loaitintuc = DB::table('loaitintuc')->select('*');
        $loaitintuc = $loaitintuc->get();
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        $paginate = new \Illuminate\Pagination\Paginator($products, 8);
        return view('index', compact('products','duans','typeproducts', 'title', 'loaibds', 'tintuc', 'loaitintuc','paginate', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('product.create', compact('duans','typeproducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new RealEstate();
        $product->maduan=$request->maduan;
        $product->maloai=$request->maloai;
        $product->tensp = $request->tensp;
        $product->giatien = $request->giatien;
        if($request->hasFile('anhsp')){
            $file = $request->file('anhsp');

            $filename =   time().$file->getClientOriginalName();
            $file->move('uploads/product/', $filename);
            $product->anhsp = $filename;
        }
        $product->chieudai = $request->chieudai;
        $product->chieurong = $request->chieurong;
        $product->sophongngu = $request->sophongngu;
        $product->sophongtam = $request->sophongtam;
        $product->huong = $request->huongnha;
        $product->diachi = $request->diachi;
        $product->save();
        return redirect()->route('home');
        //


}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = RealEstate::find($id);
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('product.detail', compact('product','duans','typeproducts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function edit(RealEstate $realEstate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RealEstate $realEstate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function destroy(RealEstate $realEstate)
    {
        //
    }

}
