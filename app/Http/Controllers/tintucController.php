<?php

namespace App\Http\Controllers;

use App\Models\tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc = DB::table('tintuc')->select('*');
        $tintuc = $tintuc->get();
        return view('admin.tintuc.tintuc', compact('tintuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tintuc.tintuc');
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
        $tintuc = new tintuc();
        $tintuc->matin=$data['matin'];
        $tintuc->maloaitin=$data['maloaitin'];
        $tintuc->manguoidang=$data['manguoidang'];
        $tintuc->noidung=$data['noidung'];
        $tintuc->ngaydang=$data['ngaydang'];
        $tintuc->save();
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
    public function edit($matin)
    {
        $tintuc = tintuc::findOrFail($matin);
        return view('admin.tintuc.update', compact('tintuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matin)
    {
        $tintuc = tintuc::find($matin);
        $tintuc->matin = $request->matin;
        $tintuc->maloaitin = $request->maloaitin;
        $tintuc->manguoidang = $request->manguoidang;
        $tintuc->noidung = $request->noidung;
        $tintuc->ngaydang = $request->ngaydang;
        $tintuc->save();
        return redirect()->action([tintucController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($matin)
    {
        $tintuc = tintuc::find($matin);

        $tintuc->delete();
        return redirect()->action([tintucController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}