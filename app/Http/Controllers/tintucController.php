<?php

namespace App\Http\Controllers;

use App\Models\tintuc;
use Illuminate\Http\Request;
use App\Models\loaitintuc;
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
        $loaitin = loaitintuc::all();
        return view('admin.tintuc.create', compact('loaitin'));

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

        $tintuc->tentin = $request->tentin;
        $tintuc->loaitin = $request->loaitin;
        $tintuc->noidung = $request->noidung;
        $tintuc->ngaydang = date('Y-m-d');
        $tintuc->manguoidang=1;
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
    public function edit($id)
    {
        $tintuc = tintuc::findOrFail($id);
        return view('admin.tintuc.update', compact('tintuc'));
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
        $tintuc = tintuc::find($id);
        $tintuc->id = $request->id;
        $tintuc->loaitin = $request->loaitin;
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
    public function destroy($id)
    {
        $tintuc = tintuc::find($id);

        $tintuc->delete();
        return redirect()->action([tintucController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
