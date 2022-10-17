<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Duan;
use App\Models\khachhang;
use App\Models\phanhoi;
use App\Models\phieuthu;
use App\Models\sanpham_bds;
use App\Models\tintuc;

class baocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khachhang = DB::table('khachhang')
        ->join('loaikhach', 'khachhang.maloaikhach', '=', 'loaikhach.id')
        ->select('khachhang.*', 'loaikhach.tenloai')
        ->get();
        $max = DB::table('sanpham_bds')->select('tensp')->max('giatien');
        $sanpham_bdsmax =DB::table('sanpham_bds')->where('giatien','=',$max)->get();
        $min = DB::table('sanpham_bds')->select('tensp')->min('giatien');
        $sanpham_bdsmin =DB::table('sanpham_bds')->where('giatien','=',$min)->get();
        $price = DB::table('sanpham_bds')->sum('giatien');
        // $contact = DB::table('contact')->select('*');
        // $contact = $contact->get();
        $tenloaikhach = DB::table('loaikhach')->select('*')->get();
        $tenloaikhach_1 = DB::table('loaikhach')->where('id','=',1)->select('tenloai')->get();
        $tenloaikhach_2 = DB::table('loaikhach')->where('id','=',2)->select('tenloai')->get();
        $tenloaikhach_3 = DB::table('loaikhach')->where('id','=',3)->select('tenloai')->get();
        $tenloaikhach_4 = DB::table('loaikhach')->where('id','=',4)->select('tenloai')->get();
        $tenloaikhach_5 = DB::table('loaikhach')->where('id','=',5)->select('tenloai')->get();
        $tenloaikhach_6 = DB::table('loaikhach')->where('id','=',6)->select('tenloai')->get();
        $maloaikhach_1 = DB::table('khachhang')->where('maloaikhach','=',1)->count('maloaikhach');
        $maloaikhach_2 = DB::table('khachhang')->where('maloaikhach','=',2)->count('maloaikhach');
        $maloaikhach_3 = DB::table('khachhang')->where('maloaikhach','=',3)->count('maloaikhach');
        $maloaikhach_4 = DB::table('khachhang')->where('maloaikhach','=',4)->count('maloaikhach');
        $maloaikhach_5 = DB::table('khachhang')->where('maloaikhach','=',5)->count('maloaikhach');
        $maloaikhach_6 = DB::table('khachhang')->where('maloaikhach','=',6)->count('maloaikhach');
        $maduan_1 = DB::table('sanpham_bds')->where('maduan','=',1)->count('maduan');
        $maduan_2 = DB::table('sanpham_bds')->where('maduan','=',2)->count('maduan');
        $maduan_3 = DB::table('sanpham_bds')->where('maduan','=',3)->count('maduan');
        $maduan_4 = DB::table('sanpham_bds')->where('maduan','=',4)->count('maduan');
        $maduan_5 = DB::table('sanpham_bds')->where('maduan','=',5)->count('maduan');
        $maduan_6 = DB::table('sanpham_bds')->where('maduan','=',6)->count('maduan');
        $tenduan_1 = DB::table('du_an')->where('id','=',1)->select('tenduan')->get();
        $tenduan_2 = DB::table('du_an')->where('id','=',2)->select('tenduan')->get();
        $tenduan_3 = DB::table('du_an')->where('id','=',3)->select('tenduan')->get();
        $tenduan_4 = DB::table('du_an')->where('id','=',4)->select('tenduan')->get();
        $tenduan_5 = DB::table('du_an')->where('id','=',5)->select('tenduan')->get();
        $tenduan_6 = DB::table('du_an')->where('id','=',6)->select('tenduan')->get();
        $tenloaisp_1 =DB::table('loaisp_bds')->where('id','=',1)->select('tenloai')->get();
        $tenloaisp_2 =DB::table('loaisp_bds')->where('id','=',2)->select('tenloai')->get();
        $tenloaisp_3 =DB::table('loaisp_bds')->where('id','=',3)->select('tenloai')->get();
        $tenloaisp_4 =DB::table('loaisp_bds')->where('id','=',4)->select('tenloai')->get();
        $tenloaisp_5 =DB::table('loaisp_bds')->where('id','=',5)->select('tenloai')->get();
        $tenloaisp_6 =DB::table('loaisp_bds')->where('id','=',6)->select('tenloai')->get();
        $tenloaisp_7 =DB::table('loaisp_bds')->where('id','=',7)->select('tenloai')->get();
        $tenloaisp_8 =DB::table('loaisp_bds')->where('id','=',8)->select('tenloai')->get();
        $tenloaisp_9 =DB::table('loaisp_bds')->where('id','=',9)->select('tenloai')->get();
        $tenloaisp_10 =DB::table('loaisp_bds')->where('id','=',10)->select('tenloai')->get();
        $masp_1 = DB::table('sanpham_bds')->where('maloai','=',1)->count('maloai');
        $masp_2 = DB::table('sanpham_bds')->where('maloai','=',2)->count('maloai');
        $masp_3 = DB::table('sanpham_bds')->where('maloai','=',3)->count('maloai');
        $masp_4 = DB::table('sanpham_bds')->where('maloai','=',4)->count('maloai');
        $masp_5 = DB::table('sanpham_bds')->where('maloai','=',5)->count('maloai');
        $masp_6 = DB::table('sanpham_bds')->where('maloai','=',6)->count('maloai');
        $masp_7 = DB::table('sanpham_bds')->where('maloai','=',7)->count('maloai');
        $masp_8 = DB::table('sanpham_bds')->where('maloai','=',8)->count('maloai');
        $masp_9 = DB::table('sanpham_bds')->where('maloai','=',9)->count('maloai');
        $masp_10 = DB::table('sanpham_bds')->where('maloai','=',10)->count('maloai');
        $phieuthuprice = DB::table('phieuthu')->sum('sotiennop');
        $phieuthu_count = phieuthu::count();
        $khachhang_count = khachhang::count();
        $sanpham_count = sanpham_bds::count();
        return view('admin.layouts.baocao', compact('tenloaikhach','masp_1','masp_2','masp_3','masp_4','masp_5','masp_6','masp_7','masp_8','masp_9','masp_10',
                                                    'tenloaisp_1','tenloaisp_2','tenloaisp_3','tenloaisp_4','tenloaisp_5','tenloaisp_6','tenloaisp_7','tenloaisp_8','tenloaisp_9','tenloaisp_10',
                                                    'tenduan_6','tenduan_5','tenduan_4','tenduan_3','tenduan_2','tenduan_1',
                                                    'maduan_6','maduan_5','maduan_4','maduan_3','maduan_2','maduan_1',
                                                    'tenloaikhach_6','tenloaikhach_5','tenloaikhach_4','tenloaikhach_3','tenloaikhach_2','tenloaikhach_1',
                                                    'maloaikhach_6','maloaikhach_5','maloaikhach_4','maloaikhach_3','maloaikhach_2','maloaikhach_1',
                                                    'khachhang','phieuthu_count','phieuthuprice','khachhang_count','sanpham_count','price','max','sanpham_bdsmax','min','sanpham_bdsmin'));
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
