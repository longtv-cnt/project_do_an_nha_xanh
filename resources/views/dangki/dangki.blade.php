@extends('layout.app')
@section('title', 'Đăng kí')

@section('content')
    <div class="container">
        <div class="dlink pdt10 pdb10"><a href="/">Home</a> &gt; <a href="">Đăng ký</a></div>
        <h1 class="titH1 bold c_red tit_login"><span id="ucLogin_txtTitle" class="titdk">ĐĂNG KÝ THÀNH VIÊN MỚI</span></h1>
        <hr class="mgb20">

        <div id="ucLogin_pnlRegister" class="box_login box_ipt_register clearfix" validationgroup="vldReg" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ucLogin_btnRegister')">
            <form action='{{ route('postDangki') }}' method="POST">

                @csrf
            <div class="form-group">
                <div class="rdivl"><span>*</span> Tài khoản đăng ký</div>
                <div class="rdivr">
                    <input name="name" type="text" maxlength="50" id="name" class="form-control no-radius no-shadow">
                    <span id="name" class="vld-error" style="display:none;">Tên đăng nhập không được trống.</span>
                    <span id="name" class="vld-error" style="display:none;">Số điện thoại chưa đúng</span>
                    <span>*Dùng số điện thoại của bạn làm user đăng nhập để khách hàng liên hệ với bạn.</span>
                </div>
            </div>
            <div class="form-group">
                <div class="rdivl"><span>*</span> Mật khẩu</div>
                <div class="rdivr">
                    <input name="password" type="password" maxlength="50" id="password" class="form-control no-radius no-shadow">
                    <span id="ucLogin_chkPass" class="vld-error" style="display:none;">Mật khẩu không được trống.</span>
                    <span>Bao gồm các ký tự a-z, A-Z, 0-9 dài từ 6-50 ký tự.</span>
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                <div class="rdivl"><span>*</span> Nhập lại mật khẩu</div>--}}
{{--                <div class="rdivr">--}}
{{--                    <input name="ucLogin$Pass1" type="password" maxlength="50" id="ucLogin_Pass1" class="form-control no-radius no-shadow">--}}
{{--                    <span id="ucLogin_chkPass1" class="vld-error" style="display:none;">Vui lòng nhập lại mật khẩu.</span>--}}
{{--                    <span id="ucLogin_chktxtPassR" class="vld-error" style="display:none;">Mật khẩu sai.</span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="form-group">
                <div class="rdivl"><span>*</span> Email</div>
                <div class="rdivr">
                    <input name="email" type="text" maxlength="100" id="email" class="form-control no-radius no-shadow">
                    <span id="ucLogin_rev_1" class="vld-error" style="display:none;">Email chưa đúng.</span>
                    <span>Email phải chính xác để chứng thực tài khoản và thuận tiện cho khách hàng liên hệ khi cần.</span>
                    <span>Dài 100 ký tự. VD: demo@gmail.com.</span>
                </div>
            </div>
            <div class="form-group">
                <div class="rdivl"><span>*</span> Ngày sinh của bạn</div>
                <div class="rdivr"><input name="date_of_birth" type="date" maxlength="50" id="date_of_birth" class="form-control no-radius no-shadow"> </div>
            </div>
                <div class="form-group ">
                    <input name="roles" type="hidden" value="19" id="roles" class="form-control no-radius no-shadow">
                </div>




            <div class="form-group">
                <input type="submit" name="ucLogin$btnRegister" value="ĐĂNG KÝ" onclick="if (!Page_ClientValidate()){ return false; } this.disabled = true; this.value = 'Sending...';WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ucLogin$btnRegister&quot;, &quot;&quot;, true, &quot;vldReg&quot;, &quot;&quot;, false, true))" id="ucLogin_btnRegister" class="btn bold no-radius btnRegister">
            </div>
            </form>
        </div>





        <div class="intro clearfix pdt15 mgb20"><p>Đã là thành viên?&nbsp;&nbsp;&nbsp;<a href="/login">Đăng&nbsp;nhập</a>.</p>

            <p>Để được trợ giúp vui lòng liên hệ :</p>

            <p>Hotline&nbsp;<strong><a href="http://tel:0936601601/"><span style="color:#f15b40">0936-601-601</span></a></strong>&nbsp;hoặc email&nbsp;<strong><a href="http://mailto:nhadatvanminh@gmail.com">abc@gmail.com</a></strong></p>
        </div>
    </div>

@endsection

