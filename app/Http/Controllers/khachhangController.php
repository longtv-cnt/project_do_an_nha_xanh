<?php

namespace App\Http\Controllers;
use App\Models\khachhang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class khachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khachhang = DB::table('khachhang')->select('*');
        $khachhang = $khachhang->get();
        return view('admin.khachhang.khachhang', compact('khachhang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.khachhang.khachhang');
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
        $khachhang = new khachhang();
        $khachhang->makhach=$data['makhach'];
        $khachhang->tenkhach=$data['tenkhach'];
        $khachhang->email=$data['email'];
        $khachhang->SDT=$data['SDT'];
        $khachhang->taikhoanzalo=$data['taikhoanzalo'];
        $khachhang->diachi=$data['diachi'];
        $khachhang->save();
        return redirect()->back();


        // $du_an = new du_an;
        // $du_an->maduan = $request->maduan;
        // $du_an->tenduan = $request->tenduan;
        // $du_an->chudautu = $request->chudautu;
        // $du_an->save();
        // return redirect()->action([du_anController::class,'create']);


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
    public function edit($makhach)
    {
        $khachhang = khachhang::findOrFail($makhach);
        return view('admin.khachhang.update', compact('khachhang'));
        // $du_an = du_an::find($maduan);
        // $list = du_an::All();
        // return view('admin.duan.duan', compact('list','du_an'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $makhach)
    {
        $khachhang = khachhang::find($makhach);
        $khachhang->makhach = $request->makhach;
        $khachhang->tenkhach = $request->tenkhach;
        $khachhang->email = $request->email;
        $khachhang->SDT = $request->SDT;
        $khachhang->taikhoanzalo = $request->taikhoanzalo;
        $khachhang->diachi = $request->diachi;
        $khachhang->save();
        return redirect()->action([khachhangController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($makhach)
    {
            $khachhang = khachhang::find($makhach);

            $khachhang->delete();
            return redirect()->action([khachhangController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
