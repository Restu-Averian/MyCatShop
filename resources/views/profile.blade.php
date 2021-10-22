@extends('layouts/main')

@section('container-isi')
<div class="container" style="margin-top: 30px;">
    <h3 style="font-weight: bold;">Profil</h3>
    <hr>
    <div class="row align-items-center">
        <div class="col" style="margin-left: 70px;">
            <img src="icon/upload.png" class="img-thumbnail" alt="..." style="width: 60%;">
            <br>
            <button type="button" class="btn btn-primary" id="btn1"
                style="margin-top: 10px; margin-left: 20%">Choose
                File</button>
        </div>
        <div class="col">
            <form>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nama</label>
                    <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
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
                </div>
                <button type="submit" class="btn btn-primary" id="btn2" style="float: right;">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
   