<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/search-icon.css">
    <link rel="stylesheet" href="css/cart-icon.css">
    <link rel="stylesheet" href="css/navbar.css">


    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    .input-group-addon {
        border-left: 0;
        border-right: 0;
    }

    .input-group-addon:last-child {
        border-left: 0;

    }

    #nm-produk {
        font-weight: 550;
    }

    #btn2 {
        background-color: #C8A2C8;
    }

    label {
        font-weight: bold;
    }

    .form-check-label {
        font-weight: normal;
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
                <a href="profile.php" class="btn-google">
                    <i class='bx bxl-google bx-sm' style="position: relative;top: 2px;"></i>
                    <div class="label-google">Masuk dengan Google
                    </div>
                </a>

            </form>
        </div>
    </nav>

    <div class="container" style="margin-top: 30px;">
        <h3 style="font-weight: bold;">Deskripsi Produk</h3>
        <hr>
        <div class="row">
            <div class="col" style="margin-left: 30px;">
                <div class="gambar-1">
                    <img src="img/produk1.svg" class="img-thumbnail" alt="..." style="width: 100%;">
                </div>
            </div>
            <div class="col" style="margin-top: -5px">
                <h4 style="font-weight: bold;" class="mb-3">CAT CHOIZE KITTEN Cat Food 1 kg -
                    Makanan Anak Kucing</h4>
                <h2 style="color:#C8A2C8; font-weight: bold;">RP 28.000</h2>
                <span>
                    <i class="fas fa-heart mb-3" style="color: red;"></i>11</span>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-4">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                    data-type="minus" data-field="">
                                    <span class="glyphicon glyphicon-minus">-</span>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                value="10" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                    data-type="plus" data-field="">
                                    <span class="glyphicon glyphicon-plus">+</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div style="margin-top: 30px;">
                    <button type="button" class="btn btn-light btn-primary-light" id="btn1"
                        style="margin-top: 10px; width: 170px; border: 1px solid #C8A2C8; color: #C8A2C8">Keranjang</button>
                    <button type="button" class="btn btn-primary btn-primary-inline" id="btn2"
                        style="margin-top: 10px; margin-left: 10px;width: 170px;">Beli Langsung</button>
                </div>
                <br>
                <hr>
                <div id="tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Deskripsi
                                Produk</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Ulasan</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                            style="margin-bottom: 10px;">
                            <p style="margin-top: 15px;">
                                Selamat Datang di Toko Juragan Petshop menyediakan kebutuhan hewan kesayangan Anda.</p>

                            <p>CAT CHOIZE KITTEN Cat Food 1 kg.</p>

                            <p>Tersedia dalam 2 varian:

                                - Kuning Salmon with Milk

                                - Pink Tuna with Milk</p>

                            <p>Kini hadir dalam kemasan fresh pack 1kg. Lebih praktis dan terjangkau. Di racik khusus
                                untuk semua ras kucing.
                                Terbuat dari ikan tuna dan susu dengan nutrisi yang lengkap. Cocok untuk semua ras anak
                                kucing.</p>

                            <p>CAT CHOIZE KITTEN di formulasikan dengan menggabungkan semua nutrisi yang dibutuhkan oleh
                                anak kucing.
                                Kandungan nutrisi di dalamnya mengandung vitamin dan mineral yang membantu menjaga daya
                                tahan tubuh dan untuk
                                menunjang masa pertumbuhan anak kucing Anda agar sesuai dengan usianya.</p>

                            <p>Manfaat CAT CHOIZE KITTEN:</p>
                            <ul style="list-style-type: square;">
                                <li>Tinggi protein karena mengandung tuna dan susu yang berguna untuk membantu
                                    meningkatkan pertumbuhan oto dan
                                    oerkembangan pada anak kucing.</li>
                                <li>Diformulasikan dengan nutrisi esensial untuk meningkatkan stamina dan kekebalan
                                    tubuh anak kucing Anda.</li>
                                <li>Tulang dan Gigi kuat karena mengandung kalsium, fosfor dan vitamin D.</li>
                                <li>Memberikan energi untuk aktifitas anak kucing kesayangan anda.</li>
                            </ul>

                            <p>Produk buatan China</p>

                            <p>Varian:

                                Kemasan Fresh Pack 1 kg</p>

                            <p>Saran Penyimpanan;

                                Sebaiknya ditaruh di tempat kedap udara agar aroma dan teksturenya tetap terjaga.</p>

                            <p>Berat bersih:
                                1 kg</p>

                            <p>Belilah produk ini hanya di Juragan Petshop yang menyediakan segala kebutuhan hewan
                                kesayangan Anda. Dijamin
                                original dengan masa kadaluarsa lama.</p>

                            <p>Buktikan kasih sayang kepada hewan peliharaan Anda. Check Out sekarang juga. Jangan
                                sampai kehabisan stok
                                terbatas.</p>

                            <p>#makanankucing #makanankucingcatchoize #makanankucingras #makanankucingcatchoizepink
                                #catchoizekitten
                                #catchoizepink #catchoizekuning #makanankucinggosend #catchoizecatfood
                                #catchoizemakanankucing

                                #catchoizedrycatfood #catchoizekering #catchoizeeceran #catchoizegosend
                                #catchoizetunasusu #catchoizetuna
                                #catchoizekiloan #makanankucingcatchoize #catchoize #catchoizesalmonsusu</p>

                            <p>Harga tertera adalah harga untuk satu bungkus.</p>

                            <p>Berat setelah dikemas: 1100 gr.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p style="font-weight: bold;">Belum ada ulasan</p>
                            <p>Jadilah pertama yang memberikan ulasan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {

    var quantitiy = 0;
    $('.quantity-right-plus').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);


        // Increment

    });

    $('.quantity-left-minus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });

});
</script>

</html>