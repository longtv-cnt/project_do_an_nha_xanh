<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\gallery;
use App\Models\RealEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=RealEstate::all();
        $gallery = DB::table('gallery')->select('*');
        $gallery = $gallery->get();
        $sanpham_id = DB::table('gallery')
        ->join('sanpham_bds', 'gallery.sanpham_id', '=', 'sanpham_bds.id')
        ->select('gallery.*', 'sanpham_bds.id')
        ->get();
        return view('admin.gallery.gallery',compact('gallery','sanpham_id','products',));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // confirm that the user really wants to delete the record js

      $gallery = gallery::find($id);
      $image_path = public_path('store/'.$gallery->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $gallery->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->back();

    }

    public function insert_gallery(Request $request, ){
         $gallery = new gallery();
        $gallery->id = $request->id;
        $gallery->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/store');
            $file->move($destinationPath, $fileName);
            $gallery->image = $fileName;
        }
        $gallery->sanpham_id = $request->sanpham_id;
        $gallery->save();

        return redirect()->route('gallery');

    }
}
