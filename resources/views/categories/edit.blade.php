@extends('layouts/main')

@section('container-isi')
<div class="input-group mt-5 justify-content-center">
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
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
    <a href="/data-kategori" class="icon-back"><i class='bx bx-arrow-back bx-md justify-content-center'></i></a>
    <form class="border p-5 col-sm-6 ml-lg-5" action="{{ url('update',$categories->id) }}" method="POST" enctype="multipart/form-data">
      {{-- @csrf --}}
      {{ csrf_field() }}
        <p class="h2 mb-5 font-weight-bold text-center">Edit Kategori</p>
        
        <div class="mb-4">
            <label for="inpnama" class="form-label">Jenis Kategori</label>
            <style>
            #inpnama:focus {
                border-color: #A55FA5;
                outline: none;

            }
            </style>
            <input type="nama" id="inpnama" name="kategori" class="form-control mb-4" placeholder="Masukkan Jenis Kategori" value="{{ $categories->kategori }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Kategori</label>
            @if ($categories->image)
                <img src="{{ asset('storage/'.$categories->image) }}" class="img-preview">
            @else
                <img class="img-preview">
            @endif
            
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            
                @enderror
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
            <input class="btn btn-info btn-block" name="tambah" style="background-color: #A55FA5;font-weight: 600" type="submit" value="Edit Kategori">
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