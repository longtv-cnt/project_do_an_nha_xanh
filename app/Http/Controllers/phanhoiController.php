<?php

namespace App\Http\Controllers;
use App\Models\phanhoi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class phanhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phanhoi = phanhoi::with('product')
                ->where('htcl',1)
            ->where('comment_parent','=',0)
            ->get();
        $phanhoi_rep = phanhoi::with('product')
            ->where('htcl',1)
            ->where('comment_parent','>',0)
            ->get();
        $phanhoi2 = phanhoi::with('product')
            ->where('htcl',2)
            ->where('comment_parent','=',0)
            ->get();
        $phanhoi_rep2 = phanhoi::with('product')
            ->where('htcl',2)
            ->where('comment_parent','>',0)
            ->get();
        return view('admin.phanhoi.phanhoi', compact('phanhoi', 'phanhoi_rep', 'phanhoi2', 'phanhoi_rep2'));
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

    public function send_comment(Request $request)
    {
        $data = $request->all();
        $phanhoi = new phanhoi();
        $phanhoi->masp = $data['product_id'];
        $phanhoi->user_id = $data['user_id'];
        $phanhoi->comment = $data['comment'];
        $phanhoi->ngaytao = date('Y-m-d');
        $phanhoi->ngaycapnhat = date('Y-m-d');
        $phanhoi->comment_parent = 0;
        $phanhoi->htcl = $data['htcl'];
        $phanhoi->save();
    }
    public function load_comment(Request $request)
    {

        $comments = DB::table('phanhoi')
            ->where('masp', $request->product_id)
            ->where('htcl', 1)
            ->where('comment_parent','=',0)
            ->orderBy('ngaytao','DESC')
            ->get();
        $comment_reps = DB::table('phanhoi')
            ->where('masp', $request->product_id)
            ->where('htcl', 1)
            ->where('comment_parent','>',0)
            ->orderBy('ngaytao','DESC')
            ->get();

        $output = '';


        foreach ($comments as $comment) {
            $user = DB::table('users')
                ->where('id', $comment->user_id)
                ->get();

            $output .= '<div class="row style_comment ">
<div class="col-md-2">
<img width="40%" src="uploads/product/avatar-icon.jpg" class="img">
</div>
<div class="col-md-10">';
            foreach ($user as $t) {
                $output .= '<p style="color: green">@' . $t->name . '</p>';
            }
            $output .= '<p>Ngày comment: ' . $comment->ngaytao . '</p>
<p>Nội Dung: ' . $comment->comment . '</p>
</div>
</div>';


            foreach ($comment_reps as $rep) {
                $user2 = DB::table('users')
                    ->where('id', $rep->user_id)
                    ->get();
                if ($rep->comment_parent == $comment->id) {
                    $output .= '<div class="row style_comment" style="margin-left: 10px; background-color: lightskyblue">
<div class="col-md-2">
<img width="30%" src="uploads/product/avatar-icon1.jpg" class="img">
</div>
<div class="col-md-10">';
                    foreach ($user2 as $t) {
                        $output .= '<p style="color: green">@' . $t->name . '</p>';
                    }
                    $output .= '<p>Ngày comment: ' . $rep->ngaytao . '</p>
<p>Nội Dung: ' . $rep->comment . '</p>

</div>
</div>';

                } else {
                    $output .= '<div></div>';
                }
            }

        }

        $output .= '';
        echo $output;

    }
    public function load_comment2(Request $request)
    {
            $comments = DB::table('phanhoi')
                ->where('masp', $request->product_id)
                ->where('htcl', 2)
                ->where('comment_parent','=',0)
                ->orderBy('ngaytao','DESC')
                ->get();
            $comment_reps = DB::table('phanhoi')
                ->where('masp', $request->product_id)
                ->where('htcl', 2)
                ->where('comment_parent','>',0)
                ->orderBy('ngaytao','DESC')
                ->get();

            $output = '';


            foreach ($comments as $comment) {
                $user = DB::table('users')
                    ->where('id', $comment->user_id)
                    ->get();

                $output .= '<div class="row style_comment ">
<div class="col-md-2">
<img width="40%" src="uploads/product/avatar-icon.jpg" class="img">
</div>
<div class="col-md-10">';
                foreach ($user as $t) {
                    $output .= '<p style="color: green">@' . $t->name . '</p>';
                }
                $output .= '<p>Ngày comment: ' . $comment->ngaytao . '</p>
<p>Nội Dung: ' . $comment->comment . '</p>
</div>
</div>';


                foreach ($comment_reps as $rep) {
                    $user2 = DB::table('users')
                        ->where('id', $rep->user_id)
                        ->get();
                    if ($rep->comment_parent == $comment->id) {
                        $output .= '<div class="row style_comment" style="margin-left: 10px; background-color: lightskyblue">
<div class="col-md-2">
<img width="30%" src="uploads/product/avatar-icon1.jpg" class="img">
</div>
<div class="col-md-10">';
                        foreach ($user2 as $t) {
                            $output .= '<p style="color: green">@' . $t->name . '</p>';
                        }
                        $output .= '<p>Ngày comment: ' . $rep->ngaytao . '</p>
<p>Nội Dung: ' . $rep->comment . '</p>

</div>
</div>';

                    } else {
                        $output .= '<div></div>';
                    }
                }

            }

            $output .= '';


        echo $output;

    }
    public function store(Request $request)
    {
        $data = $request->all();
        $phanhoi = new phanhoi();
        $phanhoi->masp = $data['comment_product_id1'];
        $phanhoi->user_id = $data['user_id1'];
        $phanhoi->comment = $data['comment1'];
        $phanhoi->ngaytao = date('Y-m-d');
        $phanhoi->ngaycapnhat = date('Y-m-d');
        $phanhoi->comment_parent = $data['comment_id1'];
        $phanhoi->htcl = $data['htcl'];
        $phanhoi->save();
        return redirect()->back()->with('success', 'Thêm thành công');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $phanhoi = phanhoi::find($id);
//        $phanhoi->id = $request->id;
//        $phanhoi->user_id = $request->user_id;
//        $phanhoi->masp = $request->masp;
//        $phanhoi->comment = $request->comment;
//        $phanhoi->ngaytao = $request->ngaytao;
//        $phanhoi->ngaycapnhat = $request->ngaycapnhat;
//        $phanhoi->save();
//        return redirect()->action([phanhoiController::class,'index']);
//    }

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
        Session::flash('success', 'Xóa thành công');
        return redirect()->back();
    }
}
