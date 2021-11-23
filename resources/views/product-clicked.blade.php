@extends('layouts/main')

@section('container-isi')
<a href="{{ url()->previous() }}" class="position-fixed btn btn-dark rounded-3 p-2 " style="color: white;background-color: rgba(0, 0, 0, 0.5);z-index:999">
    <i class='bx bx-arrow-back bx-md '></i>
</a>
    
    <div class="container product_data " style="margin-top: 30px;">
        <h3 style="font-weight: bold;">Deskripsi Produk</h3>
        <hr>
        
            <div class="row">
    
            {{-- Gambar Produk --}}
            <div class="col" style="margin-left: 30px;style=z-index: -999">
                <div class="gambar1">
                    <img src="/storage/{{ $products->image }}" class="img-thumbnail" alt="..." style="width: 100%;">
                </div>
            </div>


            {{-- Data Produk --}}
            <div class="col" style="margin-top: -5px">
                <div style="border: 1px solid #C8A2C8;color: #C8A2C8" class="p-2 rounded-pill text-center my-3 w-50">{{ $products->kategori }}</div>
                <h4 style="font-weight: bold;" class="mb-3">{{$products->productname}}</h4>
                <h2 style="color:#C8A2C8; font-weight: bold;" >Rp {{ $products->harga }}</h2>
                <div class="row" >
                    <div class="col-4 my-4">
                        <small class="form-label text-muted">Banyak Produk</small>
                        <div class="input-group" >
                            <input type="hidden" value="{{ $products->id }}" class="prod_id">
                            {{-- Tambah --}}
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus decrement-btn btn btn-outline-danger btn-number"
                                    data-type="minus" data-field="">
                                    <span class="glyphicon glyphicon-minus">-</span>
                                </button>
                            </span>
                            
                            <input type="number" id="qty-input" name="qty-input" class="form-control qty-input input-number text-center"
                                value="{{ $products->kuantitas }}" min="1" max="{{ $products->kuantitas }}">
                            <?php $qty = $products->kuantitas;?>
                            {{-- Kurang --}}
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus increment-btn btn btn-success btn-number"
                                    data-type="plus" data-field="">
                                    <span class="glyphicon glyphicon-plus">+</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex ">
                    <form action="" method="POST" enctype="multipart/form-data" > 
                        
                        <input type="hidden" name="" value="{{ $products->id }}" class="prod_id">

                        <button  type="submit" class="btn mr-3 font-weight-bold addToCartBtn" id="btn1"
                            style="border: 1px solid #C8A2C8; color: #C8A2C8">
                            <i class='bx bxs-cart-add bx-md '></i><label>Keranjang</label>
                        </button>

                        <button type="button" class="btn btn-primary font-weight-bold" style="background-color: #A55FA5;" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close" >Beli Langsung</button>
                    
                    </form>
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Gambar Produk</label>
                                            <img src="/storage/{{ $products->image }}" width="80%" alt="">
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <p><b>Nama Kategori</b> : {{ $products->productname }}</p>
                                            <p><b>Kuantitas</b> : {{ $qty }} </p>
                                            <p><b>Deskripsi</b> : {{ $products->deskripsi }}</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="mr-auto">
                                        <small style="color: #C8A2C8"><b>Jumlah Pembayaran : </b> <h4 class="d-inline">Rp {{ $products->harga * $products->kuantitas }}</h4></small>
                                    </div>
                                <button type="button" class="btn btn-primary align-items-center" style="background-color: #A55FA5" data-bs-dismiss="modal">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
        <hr class="my-5" style="color: #C8A2C8">

        <div class="row">
            <div class="col">
                <div id="tabs">
                   
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Deskripsi
                                Produk</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Ulasan  ({{ $products->reviews->count() }})</button>
                        </li>
                    </ul>
                    <div class="tab-content" >
                        <div class="tab-pane fade show active my-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                            {{ $products->deskripsi }}
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            
                            
                            <form action="/detail/{{ $products->id }}/reviews" method="POST" class="my-4">
                                {{ csrf_field() }}
                                <label for="body">Ulasan</label>
                                <textarea class="form-control" name="body" placeholder="Beri ulasan terhadap produk ini" id="body" required></textarea>
                                <button type="submit" name="btnUlasan" id="btnUlasan" class="btn btn-primary mt-3 mb-4" style="background-color : #A55FA5">Kirim</button>
                            </form>
                            <hr class="w-50 my-3">
                            <div class="form-group">
                                <div class="reviews mt-3 mb-5">
                                    <ul class="list-group">
                                        @forelse ($products->reviews as $review)
                                            <li class="list-group-item">
                                                <div class="font-weight-bold mb-2">{{ $review->user->name }}</div>
                                                <hr>
                                                {{ $review->body }}
                                                <small class="text-primary">Diposting {{ $review->created_at }}</small>
                                            </li>
                                            
                                        @empty
                                            <div class="font-weight-bold mt-3">Belum ada ulasan</div>
                                            <small class="text-small text-muted">Jadilah pertama yang memberikan ulasan.</small>
                                            
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {

$('.addToCartBtn').click(function (e) { 
    e.preventDefault();
    var product_id = $(this).closest('.product_data').find('.prod_id').val();
    var product_qty = $(this).closest('.product_data').find('.qty-input').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $.ajax({
       type: "POST",
       url: "/add-to-cart",
       data: {
           'product_id': product_id,
           'product_qty' : product_qty,
       },
       success: function (response) {
           if(response.failure){
                Swal.fire({ 
                    title: "Silahkan login",
                    icon:'error',
                    text: "Untuk menambahkan cart, silahkan untuk login terlebih dahulu",
                }).then(ok => {
                if (ok) {
                    window.location.href = "/login";
                }
            });

           }
           else if(response.telahtambah){
                Swal.fire(response.telahtambah,'Maaf, produk ini telah anda tambahkan, silahkan klik icon cart untuk melihatnya','info');   
           }else if(response.berhasiltambah){
                Swal.fire(response.berhasiltambah,'Produk telah ditambahkan ke cart, silahkan klik icon cart untuk melihatnya','success');
           }
       }
   });
});


var qty = "<?php echo $qty?>";

// var quantitiy = 0;
$('.increment-btn').click(function(e) {

    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var inc_value=$('.qty-input').val();
    var value= parseInt(inc_value,10);
    value=isNaN(value) ? 0 : value;
    if(value<qty){
        value++;
        $('.qty-input').val(value);
    }

});

$('.decrement-btn').click(function(e) {

// Stop acting like a button
e.preventDefault();
// Get the field name
var dec_value=$('.qty-input').val();
var value= parseInt(dec_value,10);
value=isNaN(value) ? 0 : value;
if(value>1){
    value--;
    $('.qty-input').val(value);
}

});

});
</script>
    
@endsection


