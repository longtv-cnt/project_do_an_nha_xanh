<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Duan;
use App\Models\khachhang;
use App\Models\phanhoi;
use App\Models\phieuthu;
use App\Models\sanpham_bds;
use App\Models\tintuc;
use Illuminate\Support\Facades\DB;


class adminhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sanpham_xetduyet = DB::table('sanpham_bds')->where('xetduyet', '=', 1)->get();

        // $sanpham_bds = DB::table('sanpham_bds','du_an')->where('xetduyet', '=', 0)->where('id', '>', 0)->get();
        // $du_an = DB::table('du_an')->where('id', '>', 0)->get();
        $sanpham_bds = DB::table('sanpham_bds')
            ->join('du_an', 'sanpham_bds.maduan', '=', 'du_an.id')
            ->where('xetduyet', '=', 0)
            ->select('sanpham_bds.*', 'du_an.tenduan')
            ->get();
        $phanhoi = DB::table('phanhoi')
            ->join('users', 'phanhoi.user_id', '=', 'users.id')
            ->join('sanpham_bds', 'phanhoi.masp', '=', 'sanpham_bds.id')
            // ->where('user_id', '>', 0)
            ->select('phanhoi.*', 'users.name','sanpham_bds.tensp')
            ->get();
        $duan1 = DB::table('du_an')
        ->join('sanpham_bds', 'du_an.id', '=', 'sanpham_bds.maduan')
        ->select('sanpham_bds.maduan')
        ->where('sanpham_bds.maduan', '=','du_an.id')
        ->count('sanpham_bds.id');
        $duan = DB::table('du_an')
        ->select('*')
        ->get();
        $phieuthu = DB::table('phieuthu')
        ->join('khachhang','phieuthu.makhach','=', 'khachhang.id')
        ->select('phieuthu.*','khachhang.tenkhach')
        ->get();
        $banners_count = Banners::count();
        $contact_count = contact::count();
        $khachhang_count = khachhang::count();
        $phanhoi_count = phanhoi::count();
        $phieuthu_count = phieuthu::count();
        $tintuc_count = tintuc::count();
        $sanpham_count = sanpham_bds::count();
        $duan_count = Duan::count();
    return view('admin.home',compact('phieuthu','banners_count','contact_count','duan1','duan','phanhoi','khachhang_count','phanhoi_count','tintuc_count','sanpham_count','duan_count','phieuthu_count','sanpham_bds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
