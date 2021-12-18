<nav class="navbar navbar-expand-lg sticky-top " style="background-color:#C8A2C8;z-index: 999;">
    <div class="container">
        <a class="navbar-brand" href="/home" style="color: white;font-size: 28px;"><img src="/img/Logo MyCatShop-Fill.svg" width="60" height="54" class="d-inline-block align-items-center">MyCatShop</a>
        
        <form action="/resultsearchproduct" method="GET">
            <div class="row" >
                    <div class="col-10">
                            <div class="search">
                                <input type="text" style="width: 450px;" class=" search-input" placeholder="Cari barang"
                                    name="search" value="{{ request('search') }}" required>
                            </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="search-icon w-100" href="#">
                                <i class="fa fa-search" style="color: white" ></i> 
                        </button>
                    </div>
            </div>
        </form>
                    
            <div class="navbar-nav mb-2 mb-lg-0">
                @if (Auth::check())
                <a class="cart-icon" href="/cart">
                    <i class='bx bx-cart bx-md' style="color: white;"></i>
                    <span class="badge badge-danger badge-pill cart-count ">0</span> 
                </a>
                @else
                <a href="/login" href="/login">
                    
                    <i class='bx bx-cart bx-md' style="color: white;"></i> 
                </a>
                @endif
            </div>
            <div class="d-flex">
                @if( auth()->check() )
                    <div class="dropdown">
                        <a class="font-weight-bold dropdown-toggle dropdown-toggle-split" style="color: white;" data-bs-toggle="dropdown" href="/#">
                            <img src="{{ asset('storage/'.auth()->user()->image) }}" style="width: 40px;height: 40px;margin-right: 10px;border-radius: 50%;">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" >
                            <li >
                                <a class="dropdown-item" href="/profile"><i class='bx bx-user bx-sm align-middle mr-2' style="color: #313131"></i>Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item"  
                            onclick="return Swal.fire({
                                title: 'Apakah kamu yakin akan keluar ?',
                                text:'Fitur yang kamu dapatkan akan terbatas, tetapi Kamu masih dapat login kembali kok !',
                                showDenyButton: true,
                                icon:'question',
                                confirmButtonText: 'Keluar',
                                denyButtonText: `Tidak jadi`,
                                
                              }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                  window.location.href = '/logout'
                                } else if (result.isDenied) {
                                  Swal.fire('Tidak jadi keluar', '', 'info')
                                }
                              })" >
                                <i class='bx bx-log-out bx-sm align-middle mr-2'  style="color:#fc0404"></i>
                                Log Out
                            </a>
                            
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


<script>
    loadcart();
    function loadcart() {
        $.ajax({
            type: "GET",
            url: "/load-cart-data",
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                // console.log(response.count);
            }
        });
      }
</script>