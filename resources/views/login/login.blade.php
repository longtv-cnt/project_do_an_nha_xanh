@extends('layout.app')
@section('title', 'Đăng nhập')

@section('content')
    <div class="container">
        <div class="dlink pdt10 pdb10"><a href="/">Home</a> &gt; <a href="{{ route('login') }}">Đăng nhập</a></div>
        <h1 class="titH1 bold c_red tit_login"><span id="ucLogin_txtTitle" class="titdn">Đăng nhập</span></h1>
        <hr class="mgb20">



<form action="{{ route('postLogin') }}" method="POST">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>

    @endif
    @csrf
        <div id="ucLogin_pnlLogin" class="box_login box_ipt_login" validationgroup="vldlogin" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ucLogin_btnLogin')">

            <div class="form-group">
                <input name="email" type="text" maxlength="1000" id="email" class="form-control no-radius no-shadow" placeholder="Tên đăng nhập / Email / Điện thoại*">
                <span id="ucLogin_RFV1" class="vld-error" style="display:none;">Vui lòng nhập email.</span>
            </div>
            <div class="form-group">
                <input name="password" type="password" maxlength="50" id="ucLogin_txtPass" class="form-control no-radius no-shadow" placeholder="Mật khẩu *">
                <span id="ucLogin_RFV2" class="vld-error" style="display:none;">Vui lòng nhập mật khẩu.</span>
            </div>
            <div class="form-group cbcheck mgb20"><input id="ucLogin_ckbSaver" type="checkbox" name="ucLogin$ckbSaver"><label for="ucLogin_ckbSaver">&nbsp; Nhớ mật khẩu</label></div>
            <div class="form-group"><input type="submit" name="ucLogin$btnLogin" value="ĐĂNG NHẬP" onclick="if (!Page_ClientValidate()){ return false; } this.disabled = true; this.value = 'Sending...';WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ucLogin$btnLogin&quot;, &quot;&quot;, true, &quot;vldlogin&quot;, &quot;&quot;, false, true))" id="ucLogin_btnLogin" class="btn bold no-radius"></div>

        </div>
    </form>






        <div class="intro clearfix pdt15 mgb20"><p><img alt="Quên mật khẩu" src="/img/dn1.jpg">&nbsp;&nbsp;<a href="/quen-mat-khau.html">Quên mật khẩu?</a></p>

            <p><img alt="Đăng ký" src="/img/dn2.jpg">&nbsp;&nbsp;<a href="{{ route('dangki') }}">Đăng ký thành viên</a></p>

            <p>Để được trợ giúp vui lòng liên hệ :</p>

            <p>Hotline <strong><a href="http://tel:0936601601"><span style="color:#f15b40">0936-601-601</span></a></strong> hoặc email <strong><a href="http://mailto:abc@gmail.com"><span style="color:#f15b40">abc@gmail.com</span></a></strong></p>
        </div>
    </div>

@endsection

