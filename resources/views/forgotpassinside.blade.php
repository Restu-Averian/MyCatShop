@extends('layouts/main')
@section('container-isi')
    <div class="container">

        <a href="/profile" class="position-fixed btn btn-dark rounded-3 p-2 " style="color: white;background-color: rgba(0, 0, 0, 0.5);z-index:999">
            <i class='bx bx-arrow-back bx-md '></i>
        </a>
        @if ($message = Session::get('success'))
            <p class="alert alert-success">{{ $message }}</p>
        @elseif ($message = Session::get('error'))
            <p class="alert alert-danger">{{ $message }}</p>
        @endif
        <div class="row my-5">
            <div class="p-5 col-sm-5 ml-5 mr-5">
                <img src="/img/image27.svg" alt="" width="100%">
            </div>
            <div class="p-lg-5 ml-5 col-sm-5">
                <h1 class="font-weight-bold">Reset Password</h1>
                <small class="form-text text-muted w-75 ">You've successfully verified your account. 
                    Enter new password below</small>

                <form action="/change-password" method="post" class="">
                    {{ csrf_field() }}
                    
                <div class="mt-5 mb-4">
                    <label for="current_password" class="form-label">Password Lama</label>
                    <input type="password" name="current_password" id="current_password"  class="form-control" style="width:90%" >
                    <div class="form-check mt-2 ">
                        <input type="checkbox" id="chk-reg" onclick="Password()">
                        <label for="chk-reg" class="form-check-label">Show Password</label>
                        <script>
                          function Password() {
                              var x = document.getElementById("current_password");
                              if (x.type === "password") {
                                  x.type = "text";
                              } else {
                                  x.type = "password";
                              }
                          }
                        </script>
                    </div>
                    @if ($errors->any('current_password'))
                        <span class="text-danger">{{ $errors->first('current_password') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="new_password" class="form-label">Password Baru</label>
                    <input type="password" name="new_password" id="new_password" class="form-control " style="width:90%" >
                    @if ($errors->any('new_password'))
                        <span class="text-danger">{{ $errors->first('new_password') }}</span>
                    @endif
                    {{-- <div class="form-check">
                        <input type="checkbox" id="chk-reg2" onclick="Password()">
                        <label for="chk-reg2" class="form-check-label">Show Password</label>
                        <script>
                          function Password() {
                              var x = document.getElementById("newpassword");
                              if (x.type === "password") {
                                  x.type = "text";
                              } else {
                                  x.type = "password";
                              }
                          }
                        </script>
                    </div> --}}
                </div>
                <div class="mb-4">
                    <label for="new_confirm_password" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" name="new_confirm_password" id="new_confirm_password" class="form-control" style="width:90%"  autocomplete="current_password">
                    @if ($errors->any('new_confirm_password'))
                        <span class="text-danger">{{ $errors->first('new_confirm_password') }}</span>
                    @endif
                    {{-- <div class="form-check">
                        <input type="checkbox" id="chk-reg3" onclick="Password()">
                        <label for="chk-reg3" class="form-check-label">Show Password</label>
                        <script>
                          function Password() {
                              var x = document.getElementById("confirmpassword");
                              if (x.type === "password") {
                                  x.type = "text";
                              } else {
                                  x.type = "password";
                              }
                          }
                        </script>
                    </div> --}}
                </div>
                {{-- @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                 @endforeach  --}}
                <div class="mt-5 text-center">
                    <button type="submit"  class="btn btn-primary h-100" style="background-color: #A55FA5">Ganti Password </button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection