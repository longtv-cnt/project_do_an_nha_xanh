<?php

namespace App\Http\Controllers;
use App\Models\Banners;
use App\Models\sanphambanners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sanphambannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanphambanners = DB::table('banner_product')->select('*');
        $sanphambanners = $sanphambanners->get();
        $sanpham_bds = DB::table('sanpham_bds')->select('*');
        $sanpham_bds = $sanpham_bds->get();
        $banners = DB::table('banners')
            ->get();
        return view('admin.sanphambanner.banners', compact('sanphambanners','sanpham_bds','banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.sanphambanner.banners');
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
        $sanphambanners = new sanphambanners();
        $sanphambanners->product_id = $data['product_id'];
        $sanphambanners->banner_id = $data['banner_id'];
        $sanphambanners->ngay_bat_dau = date('Y-m-d');
        $sanphambanners->ngay_ket_thuc = date('Y-m-d');
        $sanphambanners->lly_do=$data['lly_do'];
        $sanphambanners->save();
        return redirect()->back();


        // $banners = new banners;
        // $banners->id = $request->id;
        // $banners->tenduan = $request->tenduan;
        // $banners->chudautu = $request->chudautu;
        // $banners->save();
        // return redirect()->action([bannersController::class,'create']);


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
        $sanphambanners = sanphambanners::findOrFail($id);
        $sanpham_bds = DB::table('sanpham_bds')->select('*');
        $sanpham_bds = $sanpham_bds->get();
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        return view('admin.sanphambanner.update', compact('sanphambanners','sanpham_bds','banners'));
        // $banners = banners::find($id);
        // $list = banners::All();
        // return view('admin.duan.duan', compact('list','banners'));
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
        $sanphambanners = sanphambanners::find($id);
        $sanphambanners->product_id = $request->product_id;
        $sanphambanners->banner_id = $request->banner_id;
//        $sanphambanners->ngay_bat_dau = $request->ngay_bat_dau;
//        $sanphambanners->ngay_ket_thuc = $request->ngay_ket_thuc;
        $sanphambanners->lly_do= $request->lly_do;
        $sanphambanners->save();
        return redirect()->action([sanphambannersController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanphambanners = sanphambanners::find($id);
        $sanphambanners->delete();
            return redirect()->action([sanphambannersController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
