@extends('layouts/main')
@section('container-isi')
    
<div class="container my-5">
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

</div>
<script>
$(document).ready(function() {

  

    // var quantitiy = 0;
    $('.increment-btn').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        // var inc_value=$('.qty-input').val();
        var inc_value=$(this).closest('.product-data').find('.qty-input').val();
        var value= parseInt(inc_value,10);
        value=isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            // $('.qty-input').val(value);
            $(this).closest('.product-data').find('.qty-input').val(value);
        }

    });

    $('.decrement-btn').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        // var dec_value=$('.prod_qty').val();
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


    $('.delete-cart-item').click(function (e) { 
        e.preventDefault();

        

        var prod_id = $(this).closest('.product-data').find('.prod_id').val();
        $.ajax
        ({
            method: "POST",
            url: "delete-cart-item",
            data: 
            {
                'prod_id':prod_id,
            },
            success: function (response) 
            {
                Swal.fire
                ({
                    title: "Berhasil hapus",
                    icon:'success',
                }).then(ok => {
                    if (ok) {
                        window.location.href = "/cart";
                    };
                });
            }
        });
    });


    


    $('.changeQuantity').click(function (e) { 
        
        e.preventDefault();

        var prod_id = $(":root").find('.prod_id').val();
        var qty = $(':root').find('.qty-input').val();
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
            }
        });
    });
});
</script>
@endsection