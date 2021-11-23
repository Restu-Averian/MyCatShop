@extends('layouts/main')
      
@section('container-isi')  

<div class="input-group mt-5">
      <!--Masuk-->

      <form class="border p-5 col-sm-5 mr-4" action="/login" method="post">
        {{ csrf_field() }}
          <p class="h2 mb-5 font-weight-bold">Selamat Datang !</p>

          <div class="mb-4">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Masukkan E-mail">
          </div>

          <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              <div class="form-check mt-2">
                  <input type="checkbox" id="chk" onclick="Password()">
                  <label for="chk" class="form-check-label">Show Password</label>
                  <script>
                    function Password() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                  </script>
              </div>
          </div>

          <div class="d-flex justify-content-between">
              {{-- <div>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                      <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                  </div>
              </div> --}}
              <div>
                  <a href="" style="color: #A55FA5;font-weight: 600">Forgot password?</a>
              </div>
          </div>

          <input href="#" style="background-color: #A55FA5; font-weight: 600" class="btn btn-info btn-block my-4 "
              type="submit" value="Masuk">

      </form>


      <!--Daftar Akun-->
      <div class="border p-5 col-sm-5 ml-4 text-center " >
          <p class="h2 font-weight-bold">Daftar Akun</p>
          <p >Klik tombol di bawah untuk mulai membuat akun</p>
          <a href="/register" class="btn btn-primary pt-2 pb-2 m-auto" style="font-weight: 600;background-color: #A55FA5"> Daftar Akun</a>
      </div>
  </div>
  @endsection
