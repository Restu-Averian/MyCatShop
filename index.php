<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MyCatShop </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/search-icon.css">
    <link rel="stylesheet" href="css/cart-icon.css">
    <link rel="stylesheet" href="css/navbar.css">

    <style>
    a {
        color: black;
    }

    a:hover {
        color: inherit;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color:#C8A2C8;
    height: 80px;z-index: 1;top: 0;">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: white;font-size: 28px;">MyCatShop</a>
            <div class="d-flex justify-content-center h-100" style="width: 450px;">
                <div class="search">
                    <input type="text" style="width: 450px;" class="search-input" placeholder="Cari barang"
                        name="search">
                    <button class="search-icon">
                        <div href="#"> <i class="fa fa-search" style="position: relative;top: 2px;"></i> </div>
                    </button>
                </div>
            </div>
            <div class="d-flex">
                <a class="cart-icon">
                    <div href="#"> <i class='bx bx-cart bx-sm' style="color: white;"></i> </div>
                </a>
            </div>
            <form class="d-flex">
                <a href="profile.php" name="btnprofil" class="btn-google">
                    <i class='bx bxl-google bx-sm' style="position: relative;top: 2px;"></i>
                    <div class="label-google">Masuk dengan Google
                    </div>
                </a>
            </form>
        </div>
    </nav>

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
        <div class="row row-cols-1 row-cols-md-5 g-4" style="margin-bottom: 30px;">
            <a href="#" class="col">
                <div class="card">
                    <img src="img/kategoriKucing.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-md-center">Anak Kucing</h5>
                    </div>
                </div>
            </a>
            <a href="#" class="col">
                <div class="card">
                    <img src="img/kategoriWetFood.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-md-center">Wet Food</h5>
                    </div>
                </div>
            </a>
            <a href="dry-food-category.php" class="col">
                <div class="card">
                    <img src="img/kategoriDryFood.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-md-center">Dry Food</h5>
                    </div>
                </div>
            </a>
            <a href="#" class="col">
                <div class="card">
                    <img src="img/kategoriMainan.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-md-center">Cat Toys</h5>
                    </div>
                </div>
            </a>
            <a href="#" class="col">
                <div class="card">
                    <img src="img/kategoriPerlengkapan.svg" style="width: 200px;" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-md-center">Perlengkapan Pasir</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-4 font-weight-bold" style="font-size: 30px;">
            Top Recommended
        </div>
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

            <div class="kotak" style="position: relative;">
                <a href="#" class="add-cart">
                    <img src="icon/btnAddChart.svg" class="add-cart">
                </a>
                <a href="product-clicked.php" class="col" style="position: absolute;">
                    <div class=" card">
                        <img src="img/profelin.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 id="nm-produk" class="mb-lg-3">Profelin Wet Food Tuna Red Meat in
                                Jelly 400 g</h5>
                            <span><i class="fas fa-heart mb-3" style="color: red;"></i>11</span>
                            <h2>Rp 28.000</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="kotak" style="position: relative;">
                <a href="#" class="add-cart">
                    <img src="icon/btnAddChart.svg" class="add-cart">
                </a>
                <a href="product-clicked.php" class="col" style="position: absolute;">
                    <div class=" card">
                        <img src="img/pawsitive.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 id="nm-produk" class="mb-lg-3">Pawsitive Lemon Pasir Gumpal
                                Kucing [25 L]</h5>
                            <span><i class="fas fa-heart mb-3" style="color: red;"></i>11</span>
                            <h2>Rp 28.000</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!--Container End-->
    </div>
</body>

</html>