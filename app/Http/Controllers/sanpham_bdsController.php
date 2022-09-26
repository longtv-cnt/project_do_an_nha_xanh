<?php

namespace App\Http\Controllers;

use App\Models\sanpham_bds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sanpham_bdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham_bds = DB::table('sanpham_bds')->select('*');
        $sanpham_bds = $sanpham_bds->get();
        return view('admin.sanpham_bds.sanpham_bds', compact('sanpham_bds'));
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
        $sanpham_bds = new sanpham_bds();
        $sanpham_bds->masanpham=$data['masanpham'];
        $sanpham_bds->maloai=$data['maloai'];
        $sanpham_bds->tensp=$data['tensp'];
        $sanpham_bds->giatien=$data['giatien'];
        $sanpham_bds->anhsp=$data['anhsp'];
        $sanpham_bds->huong=$data['huong'];
        $sanpham_bds->chieudai=$data['chieudai'];
        $sanpham_bds->chieurong=$data['chieurong'];
        $sanpham_bds->sophongtam=$data['sophongtam'];
        $sanpham_bds->sophongngu=$data['sophongngu'];
        $sanpham_bds->xetduyet=$data['xetduyet'];
        $sanpham_bds->tinhtrang=$data['tinhtrang'];
        $sanpham_bds->maduan=$data['maduan'];
        $sanpham_bds->diachi=$data['diachi'];
        $sanpham_bds->nhaxanh=$data['nhaxanh'];
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
    public function edit($masanpham)
    {
        $sanpham_bds = sanpham_bds::findOrFail($masanpham);
        return view('admin.sanpham_bds.update', compact('sanpham_bds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $masanpham)
    {
        $sanpham_bds = sanpham_bds::find($masanpham);
        $sanpham_bds->masanpham = $request->masanpham;
        $sanpham_bds->maloai = $request->maloai;
        $sanpham_bds->tensp = $request->tensp;
        $sanpham_bds->giatien = $request->giatien;
        $sanpham_bds->anhsp = $request->anhsp;
        $sanpham_bds->huong = $request->huong;
        $sanpham_bds->chieudai = $request->chieudai;
        $sanpham_bds->chieurong = $request->chieurong;
        $sanpham_bds->sophongtam = $request->sophongtam;
        $sanpham_bds->sophongngu = $request->sophongngu;
        $sanpham_bds->xetduyet = $request->xetduyet;
        $sanpham_bds->tinhtrang = $request->tinhtrang;
        $sanpham_bds->maduan = $request->maduan;
        $sanpham_bds->diachi = $request->diachi;
        $sanpham_bds->nhaxanh = $request->nhaxanh;
        $sanpham_bds->save();
        return redirect()->action([sanpham_bdsController::class,'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($masanpham)
    {

        $sanpham_bds = sanpham_bds::find($masanpham);

        $sanpham_bds->delete();
        return redirect()->action([sanpham_bdsController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
