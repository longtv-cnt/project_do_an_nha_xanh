<?php

namespace App\Http\Controllers;
use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        return view('admin.banners.banners', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.banners.banners');
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
        $banners = new Banners();
        $banners->id=$data['id'];
        $banners->image=$data['image'];
        $banners->link=$data['link'];
        $banners->position=$data['position'];
        $banners->save();
        return redirect()->back();


        // $banners = new banners;
        // $banners->id = $request->id;
        // $banners->tenduan = $request->tenduan;
        // $banners->chudautu = $request->chudautu;
        // $banners->save();
        // return redirect()->action([bannersController::class,'create']);


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
        $banners = banners::findOrFail($id);
        return view('admin.banners.update', compact('banners'));
        // $banners = banners::find($id);
        // $list = banners::All();
        // return view('admin.duan.duan', compact('list','banners'));
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
        $banners = Banners::find($id);
        $banners->id = $request->id;
        $banners->image = $request->image;
        $banners->link = $request->link;
        $banners->position = $request->position;
        $banners->save();
        return redirect()->action([bannersController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $banners = banners::find($id);

            $banners->delete();
            return redirect()->action([bannersController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
