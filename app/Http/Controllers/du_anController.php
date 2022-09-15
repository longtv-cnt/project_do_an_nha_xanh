<?php

namespace App\Http\Controllers;
use App\Models\du_an;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class du_anController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $du_an = DB::table('du_an')->select('*');
        $du_an = $du_an->get();

        $pageName = 'Tên Trang - News';

        return view('admin.duan.duan', compact('du_an', 'pageName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.duan.create');
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
        $du_an = new du_an();
        $du_an->maduan=$data['maduan'];
        $du_an->tenduan=$data['tenduan'];
        $du_an->chudautu=$data['chudautu'];
        $du_an->save();
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
    public function edit($maduan)
    {
        $du_an = du_an::findOrFail($maduan);
        $pageName = 'du_an - Update';
        return view('admin.duan.update', compact('du_an', 'pageName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maduan)
    {
        $du_an = du_an::find($maduan);
        $du_an->maduan = $request->maduan;
        $du_an->tenduan = $request->tenduan;
        $du_an->chudautu = $request->chudautu;

        $du_an->save();
        return redirect()->action([du_anController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            // $du_an = du_an::find($id);

            // $du_an->delete();
            // return redirect()->action([du_anController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
