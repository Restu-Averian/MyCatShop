@extends('layouts/main')

@section('container-isi')    
<style>
    input[type=submit]{
        font-weight: 600;
        background-color: #A55FA5;
        transition: 0.3s ease-in-out;
        
    }
    input[type=submit]:hover{
        background-color: #c06bc0;
    }
    input[type=submit]:focus{
        background-color: #A55FA5;
    }
    .each-product{
      transition: 0.4s;
      color: black;
    }
    .each-product:hover{
      transition: 0,4s;
      transform: translateY(-30px);
    }
</style>

    
<div class="row row-cols-1 row-cols-md-3  g-4 mb-5">
  <a href="/home" class="position-fixed btn btn-dark rounded-3 p-2 " style="color: white;background-color: rgba(0, 0, 0, 0.5);z-index:999">
    <i class='bx bx-arrow-back bx-md '></i>
  </a>

  @foreach ($products as $item)
    <a href="detail/{{ $item->id }}" class="col ">
      <div class="card h-100 each-product" >
        <img src="{{ '/storage/' .$item->image }}" style="width: 100%; max-width: 300px" class="card-img-top m-auto" alt="Gambar Produk">
        <div class="card-body" >
          <div class="border rounded text-center mb-2" style="width: 30%; margin-bottom: 10px;color: #C8A2C8;" >{{ $item->kategori }}</div>
          <h6 class="card-title mb-3">{{ $item->productname }}</h6>
          <h2 class="card-text mb-3" style="color: #A55FA5">Rp {{ $item->harga }}</h2>
          {{-- <input type="submit" href="/allproduct" style="z-index: 999;" class="btn btn-primary" value="Tambah ke Keranjang" > --}}
        </div>
      </div>
    </a>
 
  @endforeach

</div>

    @endsection
