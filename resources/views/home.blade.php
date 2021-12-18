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
    .link{
      transition: 0.4s;
      color: #cc75cc;
    }
    .link:hover{
      transition: 0,4s;
      transform: translateY(-10px);
    }
</style>

     <!--Container Start-->
    <div class="container">
        <div id="carousel-slider" class="carousel slide" data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> --}}
                <div >
                    <img style="width:100%; height:100%;" class="d-block w-100" src="/img/Banner.svg" alt="First slide">
                </div>
                <div >
                    <img style="width:100%; height:100%;" class="d-block w-100" src="/img/Banner.svg" alt="First slide">
                </div>
                <div >
                    <img style="width:100%; height:100%;" class="d-block w-100" src="/img/Banner MyCatshop - Promo Whiskas rev 4.svg" alt="Third slide">
                </div>
        </div>
            
          <script>
              $("#carousel-slider").slick({
                    arrows: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1300,
                    mobileFirst: true
                });
          </script>

        <div class="mb-4 font-weight-bold " style="font-size: 30px;">
            Kategori
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4 " style="margin-bottom: 30px;">
            <a href="allkucingproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/Kategori/kategoriKucing.svg" style="width: 200px;" class="card-img-top m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Kucing ( {{ $kucing->count() }} )</h5>
                        </div>
                </div>
            </a>
            <a href="allwetfoodproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/Kategori/kategoriWetFood.svg" style="width: 200px;" class="card-img-top m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Wet Food ( {{ $wetfood->count() }} )</h5>
                        </div>
                </div>
            </a>
            <a href="alldryfoodproduct" class="col each-product"> 
                <div class="card">
                    <img src="/img/Kategori/kategoriDryFood.svg" style="width: 200px;" class="card-img-top m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Dry Food ( {{ $dryfood->count() }} )</h5>
                        </div>
                </div>
            </a>
            <a href="allcattoysproduct" class="col each-product"> 
                <div class="card mt-3">
                    <img src="/img/Kategori/kategoriMainan.svg" style="width: 200px;" class="card-img-top mb-3 m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Cat Toys ( {{ $cattoys->count() }} )</h5>
                        </div>
                </div>
            </a>
            <a href="allpasirproduct" class="col each-product"> 
                <div class="card mt-4">
                    <img src="/img/Kategori/kategoriPerlengkapan.svg" style="width: 200px;" class="card-img-top mb-3 m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Pasir ( {{ $pasir->count() }} )</h5>
                        </div>
                </div>
            </a>
            <a href="allmedicproduct" class="col each-product"> 
                <div class="card mt-4">
                    <img src="/img/Kategori/kategoriObat.jpg" style="width: 180px; height: 140px;" class="card-img-top m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-md-center">Obat ( {{ $obat->count() }} )</h5>
                        </div>
                </div>
            </a>
            
            
        </div>
        
        <div class="mb-4 font-weight-bold" >
            <div class="row">
                <div class="col" style="font-size: 30px;">
                    Barang Terbaru

                </div>
                <div class="col align-self-center link text-right" style="color:#A55FA5;">
                    <a href="/allproducts" class="link">Lihat semua barang ></a>  
                </div>
            </div>
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-3  g-4 mb-3" data-masonry="{'percentPosition': true }" style="margin-bottom: 30px;">
            @foreach ($products as $prod_item)
                <a href="/detail/{{ $prod_item->id }}" class="col each-product">
                    <div class="card h-100">
                        <img src="/storage/{{ $prod_item->image }}" class="card-img-top" alt="Gambar Produk">
                        <div class="card-body">
                            <div class="border rounded text-center" style="width: 30%; margin-bottom: 10px;color: #C8A2C8;" >{{ $prod_item->kategori }}</div>
                                <h6 class="card-title mb-3 text-truncate">{{$prod_item->productname}}</h6>
                                <h2 class="card-text" style="color:#A55FA5; font-weight: bold;">Rp {{ $prod_item->harga }}</h2>
                        </div>
                    </div>    
                </a>
            @endforeach
        </div>     
    </div>
        <!--Container End-->
    

@endsection
   