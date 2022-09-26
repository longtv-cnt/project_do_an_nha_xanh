<?php

namespace App\Http\Controllers;

use App\Models\loaiquyenhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loaiquyenhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaiquyenhan = DB::table('loaiquyenhan')->select('*');
        $loaiquyenhan = $loaiquyenhan->get();
        return view('admin.loaiquyenhan.loaiquyenhan', compact('loaiquyenhan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaiquyenhan.loaiquyenhan');
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
        $loaiquyenhan = new loaiquyenhan();
        $loaiquyenhan->maloai=$data['maloai'];
        $loaiquyenhan->tenquyenhan=$data['tenquyenhan'];
        $loaiquyenhan->save();
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
        $loaiquyenhan = loaiquyenhan::findOrFail($maloai);
        return view('admin.loaiquyenhan.update', compact('loaiquyenhan'));
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
        $loaiquyenhan = loaiquyenhan::find($maloai);
        $loaiquyenhan->maloai = $request->maloai;
        $loaiquyenhan->tenquyenhan = $request->tenquyenhan;
        $loaiquyenhan->save();
        return redirect()->action([loaiquyenhanController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($maloai)
    {
        $loaiquyenhan = loaiquyenhan::find($maloai);

        $loaiquyenhan->delete();
        return redirect()->action([loaiquyenhanController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
