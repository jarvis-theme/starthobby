            <div id="center_column" class="col-lg-4 col-xs-12 col-sm-4">
                <h2>Lupa Password</h2><hr><br>
                <form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
                    <div class="input-group">
                        <input type="email" class="form-control" name="recoveryEmail" placeholder="Masukkan email anda" required>
                        <span class="input-group-btn">
                            <button class="btn btn-warning" type="submit">Reset Password</button>
                        </span>
                    </div><br><br>
                </form>
            </div>
            <div id="center_column" class="col-lg-4 col-md-offset-2">
                <h2>Pelanggan Baru</h2><hr><br>
                <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a href="{{url('member/create')}}" class="btn btn-success">Daftar</a>
                    </span>
                </div>
                <br><br>
            </div>
            
