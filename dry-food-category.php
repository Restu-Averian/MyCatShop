<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MyCatShop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon" href="css/">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/search-icon.css">
    <link rel="stylesheet" href="css/cart-icon.css">
    <link rel="stylesheet" href="css/navbar.css">

    <style>
    .col {
        color: black;
    }

    .col:hover {
        color: inherit;
    }

    h2 {
        font-weight: bold;
        color: #C8A2C8;
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

    <div class="container" style="margin-top: 30px;">
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
                        <img src="img/produk2.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 id="nm-produk" class="mb-lg-3">BOLT CAT Donat Makanan Kucing
                                [1 Kg]</h5>
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
                        <img src="img/produk3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 id="nm-produk" class="mb-lg-3">Whiskas Mackerel Senior 1.1kg Adult
                                Cat Dry Food - Makanan Kucing Dewasa</h5>
                            <span><i class="fas fa-heart mb-3" style="color: red;"></i>11</span>
                            <h2>Rp 62.000</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>