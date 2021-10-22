@extends('layouts/main')

@section('container-isi')    
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-bottom: 30px;">

            <div class="kotak" style="position: relative;">
                <a href="#" class="add-cart">
                    <img src="icon/btnAddChart.svg" class="add-cart">
                </a>
                <a href="product-clicked.php" class="col" style="position: absolute;">
                    <div class=" card">
                        <img src="img/produk1.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 id="nm-produk" class="mb-lg-3">CAT CHOIZE KITTEN Cat Food 1 kg -
                                Makanan Anak Kucing</h5>
                            <span><i class="fas fa-heart mb-3" style="color: red;"></i>11</span>
                            <h2>Rp 28.000</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endsection
