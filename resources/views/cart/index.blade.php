@extends('layouts/main')
@section('container-isi')
    

    <h2 class="font-weight-bold">Keranjang</h2>
    <hr class="my-4">
    @php
        $total =0;
    @endphp
    @if ($cartitems->count()==0)
        <div class=" text-center my-5">
            <div class="align-items-center">
                <img src="/img/cart.jpg" style="width:35%">
            </div>
            <h3 class="font-weight-bold mt-3">Keranjangmu masih kosong !</h3>
            <caption class="text-small">Yuk mulai isi keranjangmu dengan mengklik tombol di bawah</caption>
            <div class="my-4">
                {{-- <a  class="btn btn-dark text-white" 
                onclick="return Swal.fire({title:'Keranjang Masih Kosong',icon:'info',text:'Silahkan mulai berbelanja dulu',confirmButtonText:'Mulai Belanja'}).then(ok=>{if(ok){window.location.href = '/allproducts'}})"> Mulai Belanja</a> --}}
                <a href="/allproducts" class="btn btn-primary" style="background-color: #A55FA5">Mulai Belanja</a>
            </div>
    
        </div>
    @else  
    @foreach ($cartitems as $item)
    <div class="row my-5 ">
        <div class="col-6">
            <div class="row align-items-center">
                <div class="col-3">
                    <img src="storage/{{ $item->products->image }}" width="100%">
                </div>
                <div class="col-8">
                    <div class="row">
                        <a href="/detail/{{ $item->products->id }}" style="font-weight: 500;font-size: 16px;color:black">{{ $item->products->productname }}</a>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-5">
                            <h4 class="font-weight-bold " style="color: #C864C8">Rp {{ $item->products->harga }}</h4>
                        </div>
                        <div class="col-5 ml-3">
                            <div class="input-group" >
                                {{-- <input type="hidden" value="{{ $item->id }}" class="prod_id"> --}}
                                {{-- Tambah --}}
                                
                                <div class="input-group text-center product-data">
                                    <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                                    <button class="input-group-text changeQuantity decrement-btn">-</button>
                                    <input type="text" name="qty-input" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                                    <input type="hidden" class="kuantitas" value="{{ $item->products->kuantitas }}">
                                    <button class="input-group-text changeQuantity increment-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <a class="btn btn-danger" style="color: white" 
                                onclick="Swal.fire({
                                    title: 'Apakah kamu yakin akan menghapusnya ?',
                                    text:'Apabila sudah dihapus, maka tidak dapat dikembalikan lagi',
                                    showDenyButton: true,
                                    icon:'question',
                                    confirmButtonText: 'Hapus',
                                    denyButtonText: `Tidak jadi`,
                                  }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                      window.location.href = 'delete-cart-item/{{ $item->id }}'
                                    } else if (result.isDenied) {
                                      Swal.fire('Tidak jadi dihapus', '', 'info')
                                    }
                                  })"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @php
                $total += $item->prod_qty * $item->products->harga;
            @endphp
        @endforeach
        <div class="col-5 justify-content-center ml-2" style="margin-top: -25%" >
            <div class="container" style="border: 1px solid #C8A2C8;width: 25%;background-color: #fff;border-radius: 3%">
                <div class="text-center mt-3" style="font-weight: 600">
                    Detail Transaksi
                </div>
                <hr class="w-75">
    
                <div class="row ">
                    <div class="col-8">
                        Total harga ({{ $cartitems->count() }} barang)
    
                    </div>
                    <div class="col">
                        Rp {{ $total }}
                    </div>
                </div>
                <div class="row my-4 justify-content-center">
                        <a href="/checkout" class="btn btn-success" style="background-color: #A55FA5" >Proses Pembelian ({{ $cartitems->count() }})</a>
                    @endif
    
                </div>
    
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    
        // var quantitiy = 0;
        $('.increment-btn').click(function(e) {
    
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            // var inc_value=$('.qty-input').val();
            // var inc_value=$(this).closest('.product-data').find('.qty-input').val();
            var inc_value=$(this).closest('.product-data').find('.qty-input').val();
            var kuantitas=$(this).closest('.product-data').find('.kuantitas').val();
            var value= parseInt(inc_value,10);
            value=isNaN(value) ? 0 : value;
            console.log(inc_value);
            if(value<kuantitas){
                value++;
                // $('.qty-input').val(value);
                $(this).closest('.product-data').find('.qty-input').val(value);
            }else {
                Swal.fire('Tak bisa','pesan pesan','error');
            }
            
        });
    
        $('.decrement-btn').click(function(e) {
    
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            // var dec_value=$('.prod_qty').val();
            // var dec_value=$(this).closest('..product-data').find('.qty-input').val();
            var dec_value=$(this).closest('.product-data').find('.qty-input').val();
            var value= parseInt(dec_value,10);
            value=isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).closest('.product-data').find('.qty-input').val(value)
            }
    
        });
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
    
        // $('.delete-cart-item').click(function (e) { 
        //     e.preventDefault();
    
            
    
        //     var prod_id = $(':root').find('.prod_id').val();
        //     $.ajax
        //     ({
        //         method: "POST",
        //         url: "delete-cart-item",
        //         data: 
        //         {
        //             'prod_id':prod_id,
        //         },
        //         success: function (response) 
        //         {
        //             Swal.fire
        //             ({
        //                 title: "Berhasil hapus",
        //                 icon:'success',
        //             }).then(ok => {
        //                 if (ok) {
        //                     window.location.href = "/cart";
        //                 };
        //             });
        //         }
        //     });
        // });
    
    
        
    
    
        $('.changeQuantity').click(function (e) { 
            
            e.preventDefault();
    
            // var prod_id = $(":root").find('.prod_id').val();
            var prod_id = $(this).closest('.product-data').find('.prod_id').val();
            // var qty = $(':root').find('.qty-input').val();
            var qty = $(this).closest('.product-data').find('.qty-input').val();
            // var prod_id = $(":root").find('.prod_id').val();
            // var qty = $(":root").find('.qty-input').val();
            // console.log(prod_id);   
            // var qty =  3;
            data={
                'prod_id':prod_id,
                'prod_qty': qty
            }
            
            $.ajax({
                method: "POST",
                url: "update-cart",
                data: data,
                success: function (response) {
                    window.location.reload();
                    // alert(response);
                }
            });
        });
    });
    </script>
{{-- <div class="container">
    <h3 style="font-weight: bold;">Keranjang</h3>
    <hr style="margin-top: 30px; margin-bottom: 20px;">
    <div class="col">
        <div class="col" style="margin-left: 30px;">
            {{-- <div class="form-check-inline" style="font-size: 18px; margin-top: 30px">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
              <label class="form-check-label" for="flexCheckChecked"  style="margin-left: 10px; margin-top: 3px">
                Pilih Semua
              </label>
            </div>
            <hr style="margin-top: 30px; margin-bottom: 30px;"> --}}
            {{-- <div class="form-check-inline" style="font-size: 18px; margin-top: 30px">
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
                                            <button type="button" class="decrement-btn btn btn-light btn-number"
                                                data-type="minus" data-field="">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                            value="10" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="increment-btn btn btn-light btn-number"
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
</div> --}} 









{{-- <div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @php
                $total = 0;
            @endphp
            @if ($cartitems->count()==0)
                <div class="text-center alert alert-danger">Data kosong</div>
                <a href="/allproducts" class="btn btn-primary mb-3" style="background-color: #A55FA5;">Mulai belanja</a>
            @endif
            @foreach ($cartitems as $item)
            <div class="row product-data">
                <div class="col-md-2">
                    <img src="storage/{{ $item->products->image }}" alt="Image here" width="100%">
                </div>
                <div class="col-md-3">
                    <h6>{{ $item->products->productname }}</h6>
                </div>
                <div class="col-md-3 data-barang">
                    <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                    <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3">
                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                        <input type="text" name="qty-input" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                        <button class="input-group-text changeQuantity increment-btn">+</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6>Rp {{ $item->products->harga }}</h6>
                </div>
                @php
                    $total += $item->prod_qty * $item->products->harga
                @endphp
                <div class="col-md-2">
                    <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> </button>
                </div>
            </div>
            @endforeach
            <div class="card-footer">
                Total : Rp {{ $total }}
                @if ($cartitems->count()==0)
                <a  class="btn btn-dark text-white" 
                onclick="return Swal.fire({title:'Keranjang Masih Kosong',icon:'info',text:'Silahkan mulai berbelanja dulu',confirmButtonText:'Mulai Belanja'}).then(ok=>{if(ok){window.location.href = '/allproducts'}})"> Pembelian ({{ $cartitems->count() }})</a>
                @else  
                <a href="/checkout" class="btn btn-success " >Proses Pembelian ({{ $cartitems->count() }})</a>
                @endif
            </div>
        </div>
    </div>

</div> --}}

@endsection