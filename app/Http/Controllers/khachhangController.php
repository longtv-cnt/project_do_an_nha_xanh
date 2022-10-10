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
        $khachhang->id=$data['id'];
        $khachhang->tenkhach=$data['tenkhach'];
        $khachhang->SDT=$data['SDT'];
        $khachhang->email=$data['email'];
        $khachhang->diachi=$data['diachi'];
        $khachhang->maloaikhach=$data['maloaikhach'];
        $khachhang->idUser=$data['idUser'];
        $khachhang->save();
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
        $khachhang = khachhang::findOrFail($id);
        return view('admin.khachhang.update', compact('khachhang'));
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
        $khachhang = khachhang::find($id);
        $khachhang->id = $request->id;
        $khachhang->tenkhach = $request->tenkhach;
        $khachhang->SDT = $request->SDT;
        $khachhang->email = $request->email;
        $khachhang->diachi = $request->diachi;
        $khachhang->maloaikhach = $request->maloaikhach;
        $khachhang->idUser = $request->idUser;


        $khachhang->save();
        return redirect()->action([khachhangController::class,'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $khachhang = khachhang::find($id);

        $khachhang->delete();
        return redirect()->action([khachhangController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
