@extends('layout.app')
@section('title', 'Đăng kí')

@section('content')
    <div class="container">
        <div class="dlink pdt10 pdb10"><a href="/">Home</a> &gt; <a href="/dang-ky.html">Đăng ký</a></div>
        <h1 class="titH1 bold c_red tit_login"><span id="ucLogin_txtTitle" class="titdk">ĐĂNG KÝ THÀNH VIÊN MỚI</span></h1>
        <hr class="mgb20">






        <div id="ucLogin_pnlRegister" class="box_login box_ipt_register clearfix" validationgroup="vldReg" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ucLogin_btnRegister')">


            <div class="form-group">
                <div class="rdivl"><span>*</span> Tài khoản đăng kí</div>
                <div class="rdivr">
                    <input name="ucLogin$Users" type="text" maxlength="50" id="ucLogin_Users" class="form-control no-radius no-shadow">
                    <span id="ucLogin_chkUsers" class="vld-error" style="display:none;">Tên đăng nhập không được trống.</span>
                    <span id="ucLogin_rev_4" class="vld-error" style="display:none;">Số điện thoại chưa đúng</span>

                    <span>*Dùng số điện thoại của bạn làm user đăng nhập để khách hàng liên hệ với bạn.</span>
                </div>
            </div>

            <div class="form-group">
                <div class="rdivl"><span>*</span> Mật khẩu</div>
                <div class="rdivr">
                    <input name="ucLogin$Pass" type="password" maxlength="50" id="ucLogin_Pass" class="form-control no-radius no-shadow">
                    <span id="ucLogin_chkPass" class="vld-error" style="display:none;">Mật khẩu không được trống.</span>
                    <span>Bao gồm các ký tự a-z, A-Z, 0-9 dài từ 6-50 ký tự.</span>
                </div>
            </div>

            <div class="form-group">
                <div class="rdivl"><span>*</span> Nhập lại mật khẩu</div>
                <div class="rdivr">
                    <input name="ucLogin$Pass1" type="password" maxlength="50" id="ucLogin_Pass1" class="form-control no-radius no-shadow">
                    <span id="ucLogin_chkPass1" class="vld-error" style="display:none;">Vui lòng nhập lại mật khẩu.</span>
                    <span id="ucLogin_chktxtPassR" class="vld-error" style="display:none;">Mật khẩu sai.</span>
                </div>
            </div>

            <div class="form-group">
                <div class="rdivl"><span>*</span> Họ tên/Tên công ty</div>
                <div class="rdivr"><input name="ucLogin$ConTy" type="text" maxlength="50" id="ucLogin_ConTy" class="form-control no-radius no-shadow"> <span>Dài từ 50 ký tự.</span></div>
            </div>

            <div class="form-group hidden">
                <div class="rdivl"><span>*</span> Số điện thoại</div>
                <div class="rdivr"><input name="ucLogin$TelU" type="text" maxlength="50" id="ucLogin_TelU" class="form-control no-radius no-shadow">

                    <span>Hãy nhập chính xác SDT của bạn.</span>
                </div>
            </div>

            <div class="form-group">
                <div class="rdivl"> Email</div>
                <div class="rdivr">
                    <input name="ucLogin$Email" type="text" maxlength="100" id="ucLogin_Email" class="form-control no-radius no-shadow">
                    <span id="ucLogin_rev_1" class="vld-error" style="display:none;">Email chưa đúng.</span>
                    <span>Email phải chính xác để chứng thực tài khoản và thuận tiện cho khách hàng liên hệ khi cần.</span>
                    <span>Dài 100 ký tự. VD: demo@gmail.com.</span>
                </div>
            </div>

            <div class="form-group hidden">
                <div class="rdivl">Địa chỉ liên lạc</div>
                <input name="ucLogin$DaiChi" type="text" maxlength="255" id="ucLogin_DaiChi" class="form-control no-radius no-shadow">
                <span>Dài 255 ký tự.</span>
            </div>

            <div class="form-group hidden">
                <div class="rdivl">Website của bạn</div>
                <input name="ucLogin$Website" type="text" maxlength="100" id="ucLogin_Website" class="form-control no-radius no-shadow">
                <span>Nhập có dạng www.tenwebsitecuaban.com.</span>
            </div>

            <div class="form-group cbcheck mgb20">
                <span class="checkOK"><input id="ucLogin_ckbOK" type="checkbox" name="ucLogin$ckbOK"><label for="ucLogin_ckbOK">&nbsp; Tôi đồng ý với các điều khoản</label></span>
            </div>


            <div class="form-group">
                <input type="button" name="ucLogin$btnRegister" value="ĐĂNG KÝ" onclick="if (!Page_ClientValidate()){ return false; } this.disabled = true; this.value = 'Sending...';WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ucLogin$btnRegister&quot;, &quot;&quot;, true, &quot;vldReg&quot;, &quot;&quot;, false, true))" id="ucLogin_btnRegister" class="btn bold no-radius btnRegister">
            </div>

        </div>





        <div class="intro clearfix pdt15 mgb20"><p>Đã là thành viên?&nbsp;&nbsp;&nbsp;<a href="/dang-nhap.html">Đăng&nbsp;nhập</a>.</p>

            <p>Để được trợ giúp vui lòng liên hệ :</p>

            <p>Hotline&nbsp;<strong><a href="http://tel:0936601601/"><span style="color:#f15b40">0936-601-601</span></a></strong>&nbsp;hoặc email&nbsp;<strong><a href="http://mailto:nhadatvanminh@gmail.com">abc@gmail.com</a></strong></p>
        </div>
    </div>

@endsection

