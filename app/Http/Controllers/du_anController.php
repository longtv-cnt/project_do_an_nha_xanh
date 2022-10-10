<?php

namespace App\Http\Controllers;
use App\Models\Duan;
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
        return view('admin.duan.duan', compact('du_an'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.duan.duan');
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
        $du_an = new Duan();
        $du_an->id=$data['id'];
        $du_an->tenduan=$data['tenduan'];
        $du_an->chudautu=$data['chudautu'];
        $du_an->save();
        return redirect()->back();


        // $du_an = new du_an;
        // $du_an->id = $request->id;
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
    public function edit($id)
    {
        $du_an = Duan::findOrFail($id);
        return view('admin.duan.update', compact('du_an'));
        // $du_an = du_an::find($id);
        // $list = du_an::All();
        // return view('admin.duan.duan', compact('list','du_an'));
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
        $du_an = Duan::find($id);
        $du_an->id = $request->id;
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
            $du_an = Duan::find($id);

            $du_an->delete();
            return redirect()->action([du_anController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
