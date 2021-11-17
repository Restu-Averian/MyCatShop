@extends('layouts/main')

@section('container-isi')
<div class="input-group mt-5 justify-content-center">
    <style>
        .icon-back {   
            height: 40px;
            color: #272727;
            transition: 0.4s;
        }
        .icon-back:hover{
            background-color: rgba(0, 0, 0,0.2);
            border-radius: 50px;
            transition: 0.4s;
        }
    </style>
    <!--Daftar Akun-->
    <a href="/data-product" class="icon-back" ><i class='bx bx-arrow-back bx-md justify-content-center'></i></a>
    <form class="border p-5 col-sm-6 ml-lg-5" action="/addproduct" method="POST" enctype="multipart/form-data">
      {{-- @csrf --}}
      {{ csrf_field() }}
        <p class="h2 mb-5 font-weight-bold text-center">Tambahkan Produk</p>

        <div class="mb-4">
            <label for="nama" class="form-label">Nama Produk</label>
            <style>
            #inpnama:focus {
                border-color: #A55FA5;
                outline: none;

            }
            </style>
            <input type="nama" id="inpnama" name="productname" class="form-control mb-4" placeholder="Masukkan Nama Produk" value="{{ old('productname') }}" required>
        </div>

        <div class="mb-4">
            <label for="kategori" class="form-label">Kategori</label>
            <div >
                <Select class="form-select" name="kategori" required>
                    @foreach ($categories as $kategori)
                        <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                        {{-- <option value="Kucing" style="background-color: white;color: rgb(43, 43, 43)">Kucing</option>
                        <option value="Wet Food" style="background-color: white;color: rgb(43, 43, 43)">Wet Food</option>
                        <option value="Dry Food" style="background-color: white;color: rgb(43, 43, 43)">Dry Food</option>
                        <option value="Cat Toys" style="background-color: white;color: rgb(43, 43, 43)">Cat Toys</option>
                        <option value="Perlengkapan Kucing" style="background-color: white;color: rgb(43, 43, 43)">Perlengkapan Kucing</option> --}}
                </Select>
            </div>
        </div>
        <div class="mb-4">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" id="harga" name="harga" class="form-control mb-4" placeholder="Masukkan Harga"  required>
        </div>
 
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="mt-lg-5 w-50 m-auto">
            <input class="btn btn-info btn-block" name="tambah" style="background-color: #A55FA5;font-weight: 600" type="submit" value="Tambah Produk">
        </div>
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
    </form>
</div>
@endsection