<?php

namespace App\Http\Controllers;
use App\Models\phieuthu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class phieuthuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phieuthu = DB::table('phieuthu')->select('*');
        $phieuthu = $phieuthu->get();
        return view('admin.phieuthu.phieuthu', compact('phieuthu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.phieuthu.phieuthu');
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
        $phieuthu = new phieuthu();
        $phieuthu->maphieu=$data['maphieu'];
        $phieuthu->sotiennop=$data['sotiennop'];
        $phieuthu->lydo=$data['lydo'];
        $phieuthu->makhach=$data['makhach'];
        $phieuthu->ngaytao=$data['ngaytao'];
        $phieuthu->save();
        return redirect()->back();


        // $phieuthu = new phieuthu;
        // $phieuthu->maphieu = $request->maphieu;
        // $phieuthu->tenduan = $request->tenduan;
        // $phieuthu->chudautu = $request->chudautu;
        // $phieuthu->save();
        // return redirect()->action([phieuthuController::class,'create']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $maphieu
     * @return \Illuminate\Http\Response
     */
    public function show($maphieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $maphieu
     * @return \Illuminate\Http\Response
     */
    public function edit($maphieu)
    {
        $phieuthu = phieuthu::findOrFail($maphieu);
        return view('admin.phieuthu.update', compact('phieuthu'));
        // $phieuthu = phieuthu::find($maphieu);
        // $list = phieuthu::All();
        // return view('admin.duan.duan', compact('list','phieuthu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $maphieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maphieu)
    {
        $phieuthu = phieuthu::find($maphieu);
        $phieuthu->maphieu = $request->maphieu;
        $phieuthu->sotiennop = $request->sotiennop;
        $phieuthu->lydo = $request->lydo;
        $phieuthu->makhach = $request->makhach;
        $phieuthu->ngaytao = $request->ngaytao;
        $phieuthu->save();
        return redirect()->action([phieuthuController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $maphieu
     * @return \Illuminate\Http\Response
     */
    public function destroy($maphieu)
    {
            $phieuthu = phieuthu::find($maphieu);
            $phieuthu->delete();
            return redirect()->action([phieuthuController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
