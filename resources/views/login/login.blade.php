<!DOCTYPE html>

  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">

            <div class="form login" id="form">
                <div class="content">
                    <h1>Login</h1>
                    <div class="group">
                        <input type="text" id="username-login" class="inputText" placeholder="&nbsp;" required>
                        <label for="username-login">Username</label>
                    </div>
                    <div class="group">
                        <input type="password" id="pass-login" class="inputText" placeholder="&nbsp;" required>
                        <label for="pass-login">Password</label>
                    </div>
                    <div class="group">
                        <input type="checkbox"> Save login
                    </div>
                    <button>Login</button>
                </div>


                <div class="content">
                    <h1>Register</h1>
                    <div class="group">
                        <input type="text" id="username-reg" class="inputText" placeholder="&nbsp;" required>
                        <label for="username-reg">Username</label>
                    </div>
                    <div class="group">
                        <input type="password" id="email-reg" class="inputText" placeholder="&nbsp;" required>
                        <label for="email-reg">Email</label>
                    </div>
                    <div class="group">
                        <input type="password" id="pass-reg" class="inputText" placeholder="&nbsp;" required>
                        <label for="pass-reg">Password</label>
                    </div>
                    <div class="group">
                        <input type="checkbox"> Save login
                    </div>
                    <button>Login</button>
                </div>


                <div class="form-rotate">
                    <div id="rotate"></div>
                </div>
            </div>
            <div class="option">
                <div class="bg-active" id="bg-active"></div>
                <div class="changeType active" id="login">Login</div>
                <div class="changeType" id="register">Register</div>
            </div>
        </div>
           <script src="script.js"></script>
    </body>
    </html>
    {{-- @extends('layout.app')
@section('title', 'Login')

@section('content') --}}
{{-- <div class="login-box" style="margin: 0 auto;">
    <div class="login-logo">
      <b>BẤT ĐỘNG SẢN</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="../../index3.html" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box --> --}}
{{-- @endsection --}}
