@extends('layouts/main')

@section('container-isi')
     <!--Container Start-->
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner mb-5" style="margin-top: 30px;">
                <div class="carousel-item active">
                    <img src="img/Banner.svg" class="d-block w-100">
                </div>
            </div>
        </div>

        <div class="mb-4 font-weight-bold" style="font-size: 30px;">
            Kategori
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-5 g-4" style="margin-bottom: 30px;">
            @foreach ($categories as $cat)    
                <a href="#" class="col">
                    <div class="card">
                        <img src="{{ asset('storage/' . $cat->image) }}" style="width: 200px;" class="card-img-top mb-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-md-center">{{ $cat->kategori }}</h5>
                            </div>
                    </div>
                </a>
            @endforeach
        </div>
        
        <div class="mb-4 font-weight-bold" style="font-size: 30px;">
                Top Recommended
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-3  g-4 mb-3" style="margin-bottom: 30px;">
            <div class="col">
                <div class="card h-100">
                    <img src="img/produk1.svg" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <div class="border rounded text-center" style="width: 30%; margin-bottom: 10px;color: #C8A2C8;" >Dry Food</div>
                            <h4 class="card-title">CAT CHOIZE KITTEN Cat Food 1 kg - 
                                    Makanan Anak Kucing</h4>
                            <h2 class="card-text" style="color: #A55FA5">Rp 28000</h2>
                    </div>
                </div>    
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/produk1.svg" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <div class="border rounded text-center" style="width: 30%; margin-bottom: 10px;color: #C8A2C8;" >Dry Food</div>
                            <h4 class="card-title">CAT CHOIZE KITTEN Cat Food 1 kg - 
                                    Makanan Anak Kucing</h4>
                            <h2 class="card-text" style="color: #A55FA5">Rp 28000</h2>
                    </div>
                </div>    
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/produk1.svg" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <div class="border rounded text-center" style="width: 30%; margin-bottom: 10px;color: #C8A2C8;" >Dry Food</div>
                            <h4 class="card-title">CAT CHOIZE KITTEN Cat Food 1 kg - 
                                    Makanan Anak Kucing</h4>
                            <h2 class="card-text" style="color: #A55FA5">Rp 28000</h2>
                    </div>
                </div>    
            </div>
            
        </div>     
    </div>
        <!--Container End-->
    

@endsection
   