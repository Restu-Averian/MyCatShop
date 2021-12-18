@extends('layouts/adminmain')

@section('container-admin')
<div class="input-group mt-5 justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
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
                        <p class="h2 mb-5 font-weight-bold text-center">Edit Produk</p>
                        <form class="pb-5 col-sm-6 m-auto" action="{{ url('updatepr',$products->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        {{ csrf_field() }}
                        @if ($message = Session::get('success'))
                        <p class="alert alert-success text-white">{{ $message }}</p>
                        @endif
                            <div class="mb-4">
                                <label for="nama" class="ml-auto">Nama Produk</label>
                                <style>
                                #inpnama:focus {
                                    border-color: #A55FA5;
                                    outline: none;
                    
                                }
                                </style>
                                <input type="nama" id="inpnama" name="productname" class="border form-control mb-4 p-2" placeholder="Masukkan Nama Produk" value="{{ $products->productname }}" required>
                            </div>
                    
                            <div class="mb-4">
                                <label for="kategori" class="ml-auto">Kategori</label>
                                <div >
                                    <Select class="form-select p-2" name="kategori" required>
                                        {{-- @foreach ($categories as $kategori)
                                            <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                                        @endforeach --}}
                                        <option value="Kucing" style="background-color: white;color: rgb(43, 43, 43)" {{ $products->kategori == "Kucing" ? "selected" : "" }} >Kucing</option>
                                        <option value="Wet Food" style="background-color: white;color: rgb(43, 43, 43)" {{ $products->kategori == "Wet Food" ? "selected" : "" }}>Wet Food</option>
                                        <option value="Dry Food" style="background-color: white;color: rgb(43, 43, 43)" {{ $products->kategori == "Dry Food" ? "selected" : "" }}>Dry Food</option>
                                        <option value="Cat Toys" style="background-color: white;color: rgb(43, 43, 43)" {{ $products->kategori == "Cat Toys" ? "selected" : "" }}>Cat Toys</option>
                                        <option value="Perlengkapan Pasir" style="background-color: white;color: rgb(43, 43, 43)" {{ $products->kategori == "Perlengkapan Pasir" ? "selected" : "" }}>Perlengkapan Pasir</option>
                                        <option value="Obat Kucing" style="background-color: white;color: rgb(43, 43, 43)" {{ $products->kategori == "Obat Kucing" ? "selected" : "" }}>Obat Kucing</option>
                                    </Select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="harga" class="ml-auto">Harga Per Satuan</label>
                                <div class="d-flex align-items-baseline">
                                    <small class="pr-3">Rp </small>
                                    <input type="number" id="harga" name="harga" class="form-control p-2 border"  value="{{ $products->harga }}" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="kuantitas" class="ml-auto">Kuantitas</label>
                                <input type="number" id="kuantitas" name="kuantitas" class="form-control mb-4 p-2 border"  value="{{ $products->kuantitas }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="ml-auto">Deskripsi</label>
                                <textarea type="number" id="deskripsi" name="deskripsi" class="form-control mb-4 p-2 border"  required>{{ $products->deskripsi }}</textarea>
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
                    
                            <div class="mb-3">
                                <label for="image" class="ml-auto">Gambar Produk</label>
                                <input class="form-control border p-2 @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                <small class="ml-auto text-small text-muted">Preview</small>
                                <div>
                                    @if ($products->image)
                                        <img src="{{ asset('storage/'.$products->image) }}" class="img-preview" width="90%">
                                    @else
                                        <img >
                                    @endif

                                </div>
                    
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
                                <input class="btn btn-primary" name="tambah" style="background-color: #A55FA5;font-weight: 600" type="submit" value="Edit Produk">
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
                </div>
            </div>
        </div>
    </div>
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