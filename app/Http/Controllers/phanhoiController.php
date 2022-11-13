<?php

namespace App\Http\Controllers;
use App\Models\phanhoi;
use App\Models\User;
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
    public function load_comment(Request $request)
    {
        $comments = DB::table('phanhoi')
            ->join('users', 'users.id', '=', 'phanhoi.user_id')
            ->where('masp', $request->product_id)
            ->get();
        $output = '';
        foreach ($comments as $comment){
            $output .= '<div class="row style_comment ">
<div class="col-md-2">
<img width="40%" src="uploads/product/avatar-icon.jpg" class="img img-responsive img-thumbnail">
</div>
<div class="col-md-10">
<p style="color: green">@'.$comment->name.'</p>
<p>Ngày comment: '.$comment->ngaytao.'</p>
<p>Nội Dung: '.$comment->comment.'</p>
</div>
</div>';
        }
        echo $output;

    }
    public function send_comment(Request $request)
    {

        $data = $request->all();
        $phanhoi = new phanhoi();
        $phanhoi->masp = $data['product_id'];
        $phanhoi->user_id = $data['user_id'];
        $phanhoi->comment = $data['comment'];
        $phanhoi->ngaytao = date('Y-m-d');
        $phanhoi->ngaycapnhat = date('Y-m-d');
        $phanhoi->save();
        return redirect()->back();

    }
    public function store(Request $request)
    {
        $request->validate([
            'comment'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        phanhoi::create($input);

        return redirect()->back();;
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
