<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
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

    #btn1,
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
        <h3 style="font-weight: bold;">Profil</h3>
        <hr>
        <div class="row align-items-center">
            <div class="col" style="margin-left: 70px;">
                <img src="icon/upload.png" class="img-thumbnail" alt="..." style="width: 60%;">
                <br>
                <button type="button" class="btn btn-primary" id="btn1"
                    style="margin-top: 10px; margin-left: 20%">Choose
                    File</button>
            </div>
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nama</label>
                        <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1" checked>
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn2" style="float: right;">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>