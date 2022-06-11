<div class="module6">
    <div class="module6">
        <div id="login">
            <div class="header" style="padding-bottom: 10%;">
                <h1>Sign in</h1>
                <hr>
            </div>

            <form action=" {{ route('admin.layout') }}" method="post">
                {{csrf_field()}}
                <input class="txtIp" type="text" class="ggg" name="user_email" placeholder="Email" required="">
                <input class="txtIp" type="password" class="ggg" name="user_password" placeholder="Password" required="">
                <p style="font-size: 20px;"><a href="#">Quên mật khẩu</a></p>

                <div class="clearfix"></div>
                <input class="btnSb" type="submit" value="Sign in" name="login">
                <input class="btnSb" type="submit" value="Create an account" name="login">
            </form>


            <p><span class="btn-round">or</span></p>

            <p>
                <a href="#"><button class="loginwith" style="background: #0079ce;">Login With Facbook</button></a>
            </p>

            <p>
                <a href="#"><button class="loginwith" style="background: #1bb2e9;">Login With Twitter</button></a>
            </p>

            <p>
                <a href="#"><button class="loginwith" style="background: #dc4e41;">Login With Google</button></a>
            </p>

            <p>
                <a href="#"><button class="loginwith" style="background: #5a5656;">Login With GitHub</button></a>
            </p>

        </div>
    </div>