        <div class="tab-title-top">
            <h1>Login Member</h1>
        </div>

        <div class="login-page">
            <div class="row">
                <div class="col-sm-6">
                    <div class="login-desc">
                        <h1>Pelanggan Baru</h1>
                        <h2>Segeralah mendaftar</h2>
                        <span>Dengan mendaftar, anda dapat berbelanja dengan lebih cepat!! ayo!!</span>
                    </div>
                    <div class="tabs-btn-login">
                        <a href="{{url('member/create')}}" class="register">Register</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="login-wrap">
                        <h1>Pelanggan Lama</h1>
                        <form action="{{url('member/login')}}" method="post" enctype="multipart/form-data">
                            <div class="content-login">
                                <b>Email</b><br>
                                <input type="text" placeholder="Email" name="email" class="large-input" value="{{Input::old('email')}}" required>
                                <br><br>
                                <b>Password</b><br>
                                <input type="password" placeholder="Password" name="password" class="large-input" required>
                                <br>
                                <small><a href="{{url('member/forget-password')}}" class="forgot">Lupa Password?</a></small>
                                <br><br>
                                <input type="submit" value="Login" class="btn-login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>