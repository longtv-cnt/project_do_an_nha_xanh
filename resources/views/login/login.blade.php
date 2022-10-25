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
