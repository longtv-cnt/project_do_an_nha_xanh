<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Duan;
use App\Models\khachhang;
use App\Models\phanhoi;
use App\Models\phieuthu;
use App\Models\sanpham_bds;
use App\Models\tintuc;
use App\Models\loaisp_bds;


class baocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sploaisp = DB ::table('loaisp_bds')
        ->join('sanpham_bds', 'loaisp_bds.id', '=', 'sanpham_bds.maloai')
        ->select(DB::raw('count(sanpham_bds.id) as total,loaisp_bds.tenloai as name'))
        ->groupBy('name')
        ->get()->toArray();
        $sploaisp1=json_decode(json_encode($sploaisp),true);
        $spduan = DB ::table('du_an')
        ->join('sanpham_bds', 'du_an.id', '=', 'sanpham_bds.maduan')
        ->select(DB::raw('count(sanpham_bds.id) as total,du_an.tenduan as name'))
        ->groupBy('name')
        ->get()->toArray();
        $spduan1=json_decode(json_encode($spduan),true);
        $khachloaikhach = DB ::table('loaikhach')
        ->join('khachhang', 'loaikhach.id', '=', 'khachhang.maloaikhach')
        ->select(DB::raw('count(khachhang.maloaikhach) as total,loaikhach.tenloai as name'))
        ->groupBy('name')
        ->get()->toArray();
        $khachloaikhach1=json_decode(json_encode($khachloaikhach),true);
        $tintuctheoloai = DB ::table('loaitintuc')
        ->join('tintuc', 'loaitintuc.id', '=', 'tintuc.loaitin')
        ->select(DB::raw('count(tintuc.id) as total,loaitintuc.tenloai as name'))
        ->groupBy('name')
        ->get()->toArray();
        $tintuctheoloai1=json_decode(json_encode($tintuctheoloai),true);
        $max = DB::table('sanpham_bds')->select('tensp')->max('giatien');
        $sanpham_bdsmax =DB::table('sanpham_bds')->where('giatien','=',$max)->get();
        $min = DB::table('sanpham_bds')->select('tensp')->min('giatien');
        $sanpham_bdsmin =DB::table('sanpham_bds')->where('giatien','=',$min)->get();
        $price = DB::table('sanpham_bds')->sum('giatien');
        // $contact = DB::table('contact')->select('*');
        // $contact = $contact->get();

        $phieuthuprice = DB::table('phieuthu')->sum('sotiennop');
        $phieuthu_count = phieuthu::count();
        $khachhang_count = khachhang::count();
        $sanpham_count = sanpham_bds::count();

        $soluong = '';
        $ngaybatdau='0000-00-00';
        $ngayketthuc='0000-00-00';
        $product = DB::table('sanpham_bds')
            ->whereBetween('ngaytao', [$ngaybatdau,$ngayketthuc])
            ->get();
        $name = '';
        return view('admin.layouts.baocao', compact('tintuctheoloai1','khachloaikhach1','spduan1','sploaisp1',
            'phieuthu_count','phieuthuprice','khachhang_count','sanpham_count',
            'price','max','sanpham_bdsmax','min','sanpham_bdsmin','soluong','product','ngaybatdau','ngayketthuc','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.baocao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khachhang = new khachhang([
            'maloaikhach' => $request->get('maloaikhach'),
            // 'stockPrice' => $request->get('stockPrice'),
            // 'stockYear' => $request->get('stockYear'),
          ]);
          $khachhang->save();

          return redirect('stocks');
    }
    public function filter(Request $request)
    {$sploaisp = DB ::table('loaisp_bds')
        ->join('sanpham_bds', 'loaisp_bds.id', '=', 'sanpham_bds.maloai')
        ->select(DB::raw('count(sanpham_bds.id) as total,loaisp_bds.tenloai as name'))
        ->groupBy('name')
        ->get()->toArray();
        $sploaisp1=json_decode(json_encode($sploaisp),true);
        $spduan = DB ::table('du_an')
            ->join('sanpham_bds', 'du_an.id', '=', 'sanpham_bds.maduan')
            ->select(DB::raw('count(sanpham_bds.id) as total,du_an.tenduan as name'))
            ->groupBy('name')
            ->get()->toArray();
        $spduan1=json_decode(json_encode($spduan),true);
        $khachloaikhach = DB ::table('loaikhach')
            ->join('khachhang', 'loaikhach.id', '=', 'khachhang.maloaikhach')
            ->select(DB::raw('count(khachhang.maloaikhach) as total,loaikhach.tenloai as name'))
            ->groupBy('name')
            ->get()->toArray();
        $khachloaikhach1=json_decode(json_encode($khachloaikhach),true);
        $tintuctheoloai = DB ::table('loaitintuc')
            ->join('tintuc', 'loaitintuc.id', '=', 'tintuc.loaitin')
            ->select(DB::raw('count(tintuc.id) as total,loaitintuc.tenloai as name'))
            ->groupBy('name')
            ->get()->toArray();
        $tintuctheoloai1=json_decode(json_encode($tintuctheoloai),true);
        $max = DB::table('sanpham_bds')->select('tensp')->max('giatien');
        $sanpham_bdsmax =DB::table('sanpham_bds')->where('giatien','=',$max)->get();
        $min = DB::table('sanpham_bds')->select('tensp')->min('giatien');
        $sanpham_bdsmin =DB::table('sanpham_bds')->where('giatien','=',$min)->get();
        $price = DB::table('sanpham_bds')->sum('giatien');
        // $contact = DB::table('contact')->select('*');
        // $contact = $contact->get();

        $phieuthuprice = DB::table('phieuthu')->sum('sotiennop');
        $phieuthu_count = phieuthu::count();
        $khachhang_count = khachhang::count();
        $sanpham_count = sanpham_bds::count();

        $ngaybatdau=$request->ngaybatdau;
        $ngayketthuc=$request->ngayketthuc;
        $product = DB::table('sanpham_bds')
            ->whereBetween('ngaytao', [$request->ngaybatdau,$request->ngayketthuc])
            ->get();
        $name = 'sanpham_bds';

        $products = DB::table('sanpham_bds')
            ->whereBetween('ngaytao', [$request->ngaybatdau,$request->ngayketthuc])
        ->get();

        $soluong = 0;
        foreach ($products as $product) {
            $soluong++;
        }

        return view('admin.layouts.baocao', compact('tintuctheoloai1','khachloaikhach1','spduan1','sploaisp1',
            'phieuthu_count','phieuthuprice','khachhang_count','sanpham_count',
            'price','max','sanpham_bdsmax','min','sanpham_bdsmin','soluong','product','ngaybatdau','ngayketthuc','name'));
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
