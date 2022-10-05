<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = DB::table('contact')->select('*');
        $contact = $contact->get();
        return view('admin.contact.contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.contact.contact');
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
        $contact = new contact();
        $contact->id=$data['id'];
        $contact->subject=$data['subject'];
        $contact->ten=$data['ten'];
        $contact->sdt=$data['sdt'];
        $contact->message=$data['message'];
        $contact->save();
        return redirect()->back();


        // $contact = new contact;
        // $contact->id = $request->id;
        // $contact->tenduan = $request->tenduan;
        // $contact->chudautu = $request->chudautu;
        // $contact->save();
        // return redirect()->action([contactController::class,'create']);


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
        $contact = contact::findOrFail($id);
        return view('admin.contact.update', compact('contact'));
        // $contact = contact::find($id);
        // $list = contact::All();
        // return view('admin.duan.duan', compact('list','contact'));
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
        $contact = contact::find($id);
        $contact->id = $request->id;
        $contact->subject = $request->subject;
        $contact->ten = $request->ten;
        $contact->sdt = $request->sdt;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->action([contactController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $contact = contact::find($id);

            $contact->delete();
            return redirect()->action([contactController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
