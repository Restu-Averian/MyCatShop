@extends('layouts/main')

@section('container-isi')

<style>
    .each-product{
      transition: 0.4s;
      color: black;
    }
    .each-product:hover{
      transition: 0,4s;
      transform: translateY(-30px);
    }
</style>

     <!--Container Start-->
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner mb-5" style="margin-top: 30px;">
                <div class="carousel-item active">
                    <img src="img/Banner.svg" class="d-block w-100">
                </div>
            </div>
        </div>

        <div class="mb-4 font-weight-bold " style="font-size: 30px;">
            Kategori
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 " style="margin-bottom: 30px;">
            <a href="allkucingproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/kategoriKucing.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Kucing</h5>
                        </div>
                </div>
            </a>
            <a href="allwetfoodproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/kategoriWetFood.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Wet Food</h5>
                        </div>
                </div>
            </a>
            <a href="alldryfoodproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/kategoriDryFood.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Dry Food</h5>
                        </div>
                </div>
            </a>
            <a href="allcattoysproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/kategoriMainan.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Cat Toys</h5>
                        </div>
                </div>
            </a>
            <a href="allpasirproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/kategoriPerlengkapan.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Pasir</h5>
                        </div>
                </div>
            </a>
            <a href="allmedicproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/kategoriObat.svg" style="width: 180px;" class="align-self-auto card-img-top mb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Obat</h5>
                        </div>
                </div>
            </a>
            
            
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
   