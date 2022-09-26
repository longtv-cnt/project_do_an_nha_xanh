<?php

namespace App\Http\Controllers;

use App\Models\loaitintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loaitintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaitintuc = DB::table('loaitintuc')->select('*');
        $loaitintuc = $loaitintuc->get();
        return view('admin.loaitintuc.loaitintuc', compact('loaitintuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaitintuc.loaitintuc');
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
        $loaitintuc = new loaitintuc();
        $loaitintuc->maloaitin=$data['maloaitin'];
        $loaitintuc->tenloai=$data['tenloai'];
        $loaitintuc->save();
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
    public function edit($maloaitin)
    {
        $loaitintuc = loaitintuc::findOrFail($maloaitin);
        return view('admin.loaitintuc.update', compact('loaitintuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maloaitin)
    {
        $loaitintuc = loaitintuc::find($maloaitin);
        $loaitintuc->maloaitin = $request->maloaitin;
        $loaitintuc->tenloai = $request->tenloai;
        $loaitintuc->save();
        return redirect()->action([loaitintucController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($maloaitin)
    {
        $loaitintuc = loaitintuc::find($maloaitin);

        $loaitintuc->delete();
        return redirect()->action([loaitintucController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
