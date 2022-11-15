<?php

namespace App\Http\Controllers;

use App\Models\loaisp_bds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loaisp_bdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaisp_bds = DB::table('loaisp_bds')->select('*');
        $loaisp_bds = $loaisp_bds->get();
        return view('admin.loaisp_bds.loaisp_bds', compact('loaisp_bds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaisp_bds.loaisp_bds');
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
        $loaisp_bds = new loaisp_bds();
        $loaisp_bds->id=$data['id'];
        $loaisp_bds->tenloai=$data['tenloai'];
        $loaisp_bds->save();
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
        $loaisp_bds = loaisp_bds::findOrFail($id);
        return view('admin.loaisp_bds.update', compact('loaisp_bds'));
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
        $loaisp_bds = loaisp_bds::find($id);
        $loaisp_bds->id= $request->id;
        $loaisp_bds->tenloai = $request->tenloai;
        $loaisp_bds->save();
        return redirect()->action([loaisp_bdsController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaisp_bds = loaisp_bds::find($id);
        $loaisp_bds->delete();
        return redirect()->action([loaisp_bdsController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
