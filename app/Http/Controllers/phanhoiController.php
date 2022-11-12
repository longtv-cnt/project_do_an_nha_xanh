<?php

namespace App\Http\Controllers;
use App\Models\phanhoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class phanhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phanhoi = DB::table('phanhoi')->select('*');
        $phanhoi = $phanhoi->get();
        return view('admin.phanhoi.phanhoi', compact('phanhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.phanhoi.phanhoi');
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
        $phanhoi = new phanhoi();
        $phanhoi->id=$data['id'];
        $phanhoi->user_id=$data['user_id'];
        $phanhoi->masp=$data['masp'];
        $phanhoi->comment=$data['comment'];
        $phanhoi->ngaytao=$data['ngaytao'];
        $phanhoi->ngaycapnhat=$data['ngaycapnhat'];
        $phanhoi->save();
        return redirect()->back();


        // $phanhoi = new phanhoi;
        // $phanhoi->maduan = $request->maduan;
        // $phanhoi->tenduan = $request->tenduan;
        // $phanhoi->chudautu = $request->chudautu;
        // $phanhoi->save();
        // return redirect()->action([phanhoiController::class,'create']);


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
    public function edit($maduan)
    {
        $phanhoi = phanhoi::findOrFail($maduan);
        return view('admin.phanhoi.update', compact('phanhoi'));
        // $phanhoi = phanhoi::find($maduan);
        // $list = phanhoi::All();
        // return view('admin.duan.duan', compact('list','phanhoi'));
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
        $phanhoi = phanhoi::find($id);
        $phanhoi->id = $request->id;
        $phanhoi->user_id = $request->user_id;
        $phanhoi->masp = $request->masp;
        $phanhoi->comment = $request->comment;
        $phanhoi->ngaytao = $request->ngaytao;
        $phanhoi->ngaycapnhat = $request->ngaycapnhat;
        $phanhoi->save();
        return redirect()->action([phanhoiController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $phanhoi = phanhoi::find($id);
            $phanhoi->delete();
            return redirect()->action([phanhoiController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
