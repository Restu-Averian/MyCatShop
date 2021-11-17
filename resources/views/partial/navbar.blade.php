<nav class="navbar navbar-expand-lg sticky-top" style="background-color:#C8A2C8;z-index: 1;">
    <div class="container">
        <a class="navbar-brand" href="/home" style="color: white;font-size: 28px;"><img src="img/Logo MyCatShop-Fill.svg" width="60" height="54" class="d-inline-block align-items-center">MyCatShop</a>
            <div class="d-flex justify-content-center h-100" style="width: 450px;">
                <div class="search">
                    <input type="text" style="width: 450px;" class="search-input" placeholder="Cari barang"
                        name="search">
                </div>

                <a class="search-icon" href="#">
                    <i class="fa fa-search" style="color: white" ></i> 
                </a>
            </div>
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="cart-icon" href="cart">
                    <i class='bx bx-cart bx-md' style="color: white;"></i> 
                </a>
            </div>
            <div class="d-flex">
                @if( auth()->check() )
                    <div class="dropdown">
                        <a class="font-weight-bold dropdown-toggle dropdown-toggle-split" style="color: white;" data-bs-toggle="dropdown" href="/#"><img src="storage/{{ auth()->user()->image }}" style="width: 40px;height: 40px;margin-right: 10px;border-radius: 50%;">{{ auth()->user()->name }}</a>
                        <ul class="dropdown-menu" >
                            <li >
                                <a class="dropdown-item" href="profile"><i class='bx bx-user bx-sm align-middle mr-2' style="color: #313131"></i>Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout"><i class='bx bx-log-out bx-sm align-middle mr-2' style="color:#fc0404"></i>Log Out</a>
                        </li>
                    </ul>                            
                </div>
                
            @else
                    <a href="/login" type="button" class="btn " style="background-color:#A55FA5;
                    color:white;font-weight:bold;
                    padding:10px 20px">
                    <i class='bx bx-user bx-sm' arial-hidden="true" style="margin-right:10px"></i>Akun Saya</a>
            @endif
        </div>
    </div>
</nav>