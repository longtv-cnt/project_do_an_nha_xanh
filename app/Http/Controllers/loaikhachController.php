<?php

namespace App\Http\Controllers;

use App\Models\loaikhach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loaikhachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaikhach = DB::table('loaikhach')->select('*');
        $loaikhach = $loaikhach->get();
        return view('admin.loaikhach.loaikhach', compact('loaikhach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaikhach.loaikhach');
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
        $loaikhach = new loaikhach();
        $loaikhach->maloai=$data['maloai'];
        $loaikhach->tenloai=$data['tenloai'];
        $loaikhach->save();
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
    public function edit($maloai)
    {
        $loaikhach = loaikhach::findOrFail($maloai);
        return view('admin.loaikhach.update', compact('loaikhach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maloai)
    {
        $loaikhach = loaikhach::find($maloai);
        $loaikhach->maloai = $request->maloai;
        $loaikhach->tenloai = $request->tenloai;
        $loaikhach->save();
        return redirect()->action([loaikhachController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($maloai)
    {
        $loaikhach = loaikhach::find($maloai);

        $loaikhach->delete();
        return redirect()->action([loaikhachController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
