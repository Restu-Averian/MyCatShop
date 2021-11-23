<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/search-icon.css">
    <link rel="stylesheet" href="css/cart-icon.css">
    <link rel="stylesheet" href="css/navbar.css">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">


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

    .form-check-input{
        width:20px;
        height:20px;
        background:white;
        border-radius:5px;
        border:2px solid #555;
    }

    .kanan{
        position: absolute;
        left: 740px;
        top: 150px;
    }

    tr{
        text-align: left;
        font-size: 15px;
    }
    tr.total{
        font-weight: bold;
    }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color:#C8A2C8;
    height: 100px;z-index: 1;top: 0;">
        <div class="container">
            <img src="img\cat1.png" class="img-thumbnail rounded-circle" alt="...">
            <a class="navbar-brand " href="index.php" style="color: white;font-size: 35px; margin-right: 120px;">MyCatShop</a>
            <div class="d-flex justify-content-center h-100" style="width: 450px;">
                <div class="search">
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                      <button class="btn btn-outline-light" type="submit" ><i class="fa fa-search" style="position: relative;top: 2px;"></i></button>
                    </form>
                </div>
            </div>
            <div class="d-flex">
                <a class="cart-icon">
                    <a href=""><i class='bx bx-cart bx-lg' style="color: white;"></i></a>
                </a>
            </div>
            <form class="d-flex">
                <div id="my-signin2"></div>
            </form>
        </div>
    </nav>

    <div class="container" style="margin-top: 30px;">
        <h3 style="font-weight: bold;">Keranjang</h3>
        <hr style="margin-top: 30px; margin-bottom: 20px;">
        <div class="col">
            <div class="col" style="margin-left: 30px;">
                <div class="form-check-inline" style="font-size: 18px; margin-top: 30px">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                  <label class="form-check-label" for="flexCheckChecked"  style="margin-left: 10px; margin-top: 3px">
                    Pilih Semua
                  </label>
                </div>
                <hr style="margin-top: 30px; margin-bottom: 30px;">
                <div class="form-check-inline" style="font-size: 18px; margin-top: 30px">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                  <label class="form-check-label" for="flexCheckChecked">
                    <div class="gambar-1" >
                            <p style="font-size: 18px; font-weight: bold;">CAT CHOIZE KITTEN Cat Food 1 kg - Makanan Anak Kucing</p>
                            <img src="img/produk1.svg" class="img" alt="..." style="width: 30%;">
                            <div style="display: inline-block; margin-left: -20px">
                                 <div class="row" style="margin-top: 10px;">
                                    <p style="color:#C8A2C8; font-weight: bold; font-size: 25px;">RP.20.000</p>  
                                    <div class="col-5">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-light btn-number"
                                                    data-type="minus" data-field="">
                                                    <span class="glyphicon glyphicon-minus">-</span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                                value="10" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-light btn-number"
                                                    data-type="plus" data-field="">
                                                    <span class="glyphicon glyphicon-plus">+</span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#"><button class="btn btn-outline-dark" type=""><i class="fas fa-trash"></i></button></a>
                            </div>  
                    </div>
                  </label>
                </div>
                <div class="kanan">
                    <div class="card text-center" style="width: 20rem;">
                      <div class="card-body">
                        <h5 class="card-title">Detail Transaksi</h5>
                        <div id="tabel" style="margin-top: 35px;">
                            <table class="table table-borderless">
                              <tr>
                                  <td>Total Harga (1 barang)</td>
                                  <td>Rp.28.000</td>
                              </tr>
                            </table>
                            <table class="table">
                              <tr class="total">
                                  <td>Total Harga (1 barang)</td>
                                  <td>Rp.28.000</td>
                              </tr>
                            </table>
                            </div>
                        <a href="#" class="btn btn-outline-light" style="background-color:#C8A2C8; font-weight: bold;">Bayar (1)</a>
                      </div>
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
<script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 200,
        'height': 38,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

</html>