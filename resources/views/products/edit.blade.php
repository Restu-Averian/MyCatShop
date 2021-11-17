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
    <form class="border p-5 col-sm-6 ml-lg-5" action="{{ url('updatepr',$products->id) }}" method="POST" enctype="multipart/form-data">
      {{-- @csrf --}}
      {{ csrf_field() }}
        <p class="h2 mb-5 font-weight-bold text-center">Edit Produk</p>

        <div class="mb-4">
            <label for="nama" class="form-label">Nama Produk</label>
            <style>
            #inpnama:focus {
                border-color: #A55FA5;
                outline: none;

            }
            </style>
            <input type="nama" id="inpnama" name="productname" class="form-control mb-4" placeholder="Masukkan Nama Produk" value="{{ $products->productname }}" required>
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
            <input type="number" id="harga" name="harga" class="form-control mb-4" placeholder="Masukkan Harga" value="{{ $products->harga }}" required>
        </div>
 
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            @if ($products->image)
                <img src="{{ asset('storage/'.$products->image) }}" class="img-preview">
            @else
                <img class="img-preview">
            @endif

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        </div>


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

        <div class="mt-lg-5 w-50 m-auto">
            <input class="btn btn-info btn-block" name="tambah" style="background-color: #A55FA5;font-weight: 600" type="submit" value="Edit Produk">
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