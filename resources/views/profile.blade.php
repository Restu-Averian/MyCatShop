@extends('layouts/main')

@section('container-isi')
<div class="container" style="margin-top: 30px;">
    <h3 style="font-weight: bold;">Profil</h3>
    <hr>
    <div class="row align-items-center">
        <div class="col" style="margin-left: 70px;">
            <img src="storage/{{ $users->image }}" class="img-thumbnail" alt="..." style="width: 60%;">
            <style>
                input[type="file"]{
                    color: transparent;
                    margin: 30px auto;
                }
            </style>
            <input type="file" />
            <script>
                
                    $(function () {
                        $('input[type="file"]').change(function () {
                            if ($(this).val() != "") {
                                    $(this).css('color', '#333');
                            }else{
                                    $(this).css('color', 'transparent');
                            }
                        });
                    })
            </script>
        </div>
        <div class="col">
            
            <form>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nama</label>
                    <a href="/change-nama" >
                        <input type="name" class="form-control" style="cursor: pointer;" name="name" id="name" value="{{ $users->name }}" disabled>
                    </a>
                    <small class="form-text text-muted mb-2">Klik untuk mengganti nama</small>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <a href="/change-email">
                        <input type="email" class="form-control" style="cursor: pointer;" name="email" id="email" value="{{ $users->email }}" disabled>
                    </a>
                    <small class="form-text text-muted mb-2">Klik untuk mengganti email</small>
                </div>
                <div class="mb-3" >
                    <label for="password" class="form-label">Password</label>
                    <a href="/change-password" > 
                        <input type="password" style="cursor: pointer;" class="form-control" name="password" id="password" value="{{ $users->password }}" disabled>
                    </a>
                    <small class="form-text text-muted mb-2">Klik untuk mengganti password</small>
                </div>
                <div class="mb-3">
                    <a href="/hapus-akun" class="btn btn-danger">Hapus Akun</a>
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1" checked>
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
</div>

@endsection
   