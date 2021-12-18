@extends('layouts/adminmain')

@section('container-admin')
<div class="input-group mt-5 justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5">
                    <div class="card-body">
                        <a href="/data-product" class="icon-back" ><i class='bx bx-arrow-back bx-md justify-content-center'></i></a>
                        <p class="h2 mb-5 font-weight-bold text-center">Tambahkan Produk</p>
                        <form class=" pb-5 col-sm-6 m-auto" action="/addproduct" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" name="myForm">
                            {{-- @csrf --}}
                          {{ csrf_field() }}
                          @if ($message = Session::get('success'))
                            <p class="alert alert-success text-white">{{ $message }}</p>
                          @endif
                                <label for="nama" class="ml-auto">Nama Produk</label>
                                <style>
                                #inpnama:focus {
                                    border-color: #A55FA5;
                                    outline: none;
                    
                                }
                                </style>
                                <input type="nama" id="inpnama" name="productname" class="form-control mb-4 border p-2" value="{{ old('productname') }}" required>
                    
                            
                                <label for="kategori" class="ml-auto">Kategori</label>
                                <div >
                                    <Select class="form-select p-2" name="kategori" required>
                                        {{-- @foreach ($categories as $kategori)
                                            <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                                        @endforeach --}}
                                            <option value="Kucing" style="background-color: white;color: rgb(43, 43, 43)">Kucing</option>
                                            <option value="Wet Food" style="background-color: white;color: rgb(43, 43, 43)">Wet Food</option>
                                            <option value="Dry Food" style="background-color: white;color: rgb(43, 43, 43)">Dry Food</option>
                                            <option value="Cat Toys" style="background-color: white;color: rgb(43, 43, 43)">Cat Toys</option>
                                            <option value="Perlengkapan Pasir" style="background-color: white;color: rgb(43, 43, 43)">Perlengkapan Pasir</option>
                                            <option value="Obat Kucing" style="background-color: white;color: rgb(43, 43, 43)">Obat Kucing</option>
                                    </Select>
                                </div>
                            
                                <label for="harga" class="ml-auto mt-4" >Harga Per Satuan</label>
                                <div class="d-flex align-items-baseline">
                                    <small class="pr-3">Rp </small><input type="number" id="harga" name="harga" class="form-control border p-2 d-inline"   required>
                                </div>
                                <div class="mn-4">

                                </div>
                                <div class="mb-4">
                                    <label for="kuantitas" class="ml-auto mt-4" >Kuantitas</label>
                                    <input type="number" id="kuantitas" name="kuantitas" class="form-control border p-2 "  required>
                                </div>
                                
                                <div class="mb-4">

                                    <label for="deskripsi" class="ml-auto" >Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control mb-4 border p-2" > </textarea> 
                                    
                                    <script>
                                        function validateForm() {
                                            let x = document.forms["myForm"]["deskripsi"].value;
                                            if (x == "") {
                                                Swal.fire("Ulasan tidak boleh kosong",'Harap masukkan ulasan mengenai produk ini','error');
                                                return false;
                                            }
                                        }
                                    </script>
                                    <script>                               
                                        tinymce.init({
                                        selector: 'textarea#deskripsi',
                                        height: 300,
                                        plugins: 'lists code emoticons',
                                        toolbar: 'undo redo | styleselect | bold italic | ' +
                                            'alignleft aligncenter alignright alignjustify | ' +
                                            'outdent indent | numlist bullist | emoticons',
                                        emoticons_append: {
                                            custom_mind_explode: {
                                            keywords: ['brain', 'mind', 'explode', 'blown'],
                                            char: '🤯'
                                            }
                                        },
                                        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                                        });
    
                                    </script>
                                </div>
                                

                                <label for="image" class="ml-auto">Gambar Produk</label>
                                <input class="form-control border mb-2 p-2 @error ('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                <small for="image" class="text-small text-muted ml-auto">Preview</small>
                                <img width="90%" class="img-preview">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
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
   
</div>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#deskripsi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection