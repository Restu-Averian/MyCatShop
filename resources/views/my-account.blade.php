      @extends('layouts/main')
      
      @section('container-isi')  

      <div class="input-group mt-5">
            <!--Masuk-->

            <form class="border p-5 col-sm-5 mr-4" method="post">
                <p class="h2 mb-5 font-weight-bold">Selamat Datang !</p>

                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Masukkan E-mail">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">

                    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-2">Minimal 8 characters
                        lenght</small>
                    <div class="form-check">
                        <input type="checkbox" id="chk" onclick="Password()">
                        <label for="chk" class="form-check-label">Show Password</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <a href="" style="color: #A55FA5;font-weight: 600">Forgot password?</a>
                    </div>
                </div>

                <a href="#" style="background-color: #A55FA5; font-weight: 600" class="btn btn-info btn-block my-4 "
                    type="submit">Masuk</a>

            </form>


            <!--Daftar Akun-->

            <form class="border p-5 col-sm-6 ml-lg-5" method="post">
                <p class="h2 mb-5 font-weight-bold">Daftar Akun</p>

                <div class="mb-4">
                    <label for="nama" class="form-label">Nama</label>
                    <style>
                    #inpnama:focus {
                        border-color: #A55FA5;
                        outline: none;

                    }
                    </style>
                    <input type="nama" id="inpnama" name="nama" class="form-control mb-4" placeholder="Masukkan Nama">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Masukkan E-mail">
                </div>

                <div class="mb-4">
                    <label for="password-reg" class="form-label">Password</label>
                    <input type="password" id="password-reg" name="password" class="form-control"
                        placeholder="Password">

                    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-2">Minimal 8 characters
                        lenght</small>
                    <div class="form-check">
                        <input type="checkbox" id="chk-reg" onclick="PasswordReg()">
                        <label for="chk-reg" class="form-check-label">Show Password</label>
                    </div>
                </div>

                <a href="#" class="btn btn-info btn-block my-4" style="background-color: #A55FA5;font-weight: 600" type="submit">Daftar
                    Akun</a>
                <p>Dengan menekan
                    <em>Daftar</em> maka kamu setuju akan
                    <a href="" target="_blank" style="color: #A55FA5;font-weight: 600">Syarat Penggunaan</a>
                    dan
                    <a href="" target="_blank" class="font-weight-bold" style="color: #A55FA5;font-weight: 600">Kebijakan Privasi</a>.
                </p>
            </form>
        </div>
        @endsection
