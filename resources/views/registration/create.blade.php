@extends('layouts/main')
      
@section('container-isi')  

<div class="input-group mt-5">
      <!--Masuk-->

      <div class="border p-5 col-sm-5 ml-4  justify-content-around " type="button" method="post">
            <p class="h2 text-center font-weight-bold">Sudah Punya Akun ?</p>
            <p class="text-center">Klik tombol di bawah untuk masuk ke akunmu</p>
            <div class="text-center">
                <a href="/login" class="btn btn-primary pt-2 pb-2  w-50 " style="font-weight: 600 ;background-color: #A55FA5"> Masuk</a>
            </div>
      </div>
          


      <!--Daftar Akun-->

      <form class="border p-5 col-sm-6 ml-lg-5" action="/register" method="POST" enctype="multipart/form-data">
        {{-- @csrf --}}
        {{ csrf_field() }}
          <p class="h2 mb-5 font-weight-bold">Daftar Akun</p>

          <div class="mb-4">
              <label for="nama" class="form-label">Nama</label>
              <style>
              #inpnama:focus {
                  border-color: #A55FA5;
                  outline: none;

              }
              </style>
              <input type="nama" id="inpnama" name="name" class="form-control mb-4" placeholder="Masukkan Nama" value="{{ old('name') }}" required>
          </div>

          <div class="mb-4">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Masukkan E-mail" required>
          </div>

          <div class="mb-4">
              <label for="password-reg" class="form-label">Password</label>
              <input type="password" id="password"  minlength="8" name="password" class="form-control"
                  placeholder="Password" required>

              <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-2">Minimal 8 characters
                  lenght</small>
              <div class="form-check">
                  <input type="checkbox" id="chk-reg" onclick="Password()">
                  <label for="chk-reg" class="form-check-label">Show Password</label>
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

          <div class="mb-4">
            <label for="image" class="form-label">Upload foto</label>
            <input type="file" class="form-control" onchange="previewImage()" name="image" id="image" required>
            
            <small for="" class="text-muted mt-lg-4">Preview</small>
            <img src="" class="img-preview" alt="" width="30%">
            <script>
                function previewImage(){
                    const image= document.querySelector('#image');
                    const imgPreview = document.querySelector('.img-preview');
                    imgPreview.style.display='block';
        
                    const oFreader = new FileReader();
                    oFreader.readAsDataURL(image.files[0]);
        
                    oFreader.onload=function(oFREvent){
                        imgPreview.src =oFREvent.target.result;
                    }
                }
            </script>
        
          </div>
          <input class="btn btn-info btn-block my-4" name="daftar"  style="background-color: #A55FA5;font-weight: 600" type="submit" value="Daftar">
          
          @if(count($errors))
          <div class="form-group">
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
          </div>
      @endif

      
          <p>Dengan menekan
              <em>Daftar</em> maka kamu setuju akan
              <a href="" target="_blank" style="color: #A55FA5;font-weight: 600">Syarat Penggunaan</a>
              dan
              <a href="" target="_blank" class="font-weight-bold" style="color: #A55FA5;font-weight: 600">Kebijakan Privasi</a>.
          </p>
      </form>
  </div>
  @endsection
