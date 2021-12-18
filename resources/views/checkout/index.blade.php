@extends('layouts/main')
@section('container-isi')
    <div class="container">
        <a href="/cart" class="position-fixed btn btn-dark rounded-3 p-2 " style="color: white;background-color: rgba(0, 0, 0, 0.5);z-index:999">
            <i class='bx bx-arrow-back bx-md '></i>
          </a>
        <h2 class="font-weight-bold">Checkout</h2>
        <hr class="my-4">
        @if ($cartitems->count()==0)
        <div class=" text-center my-5">
            <div class="align-items-center">
                <img src="/img/Checkout1.jpg" style="width:35%" alt="">
            </div>
            <h3 class="font-weight-bold mt-3">Checkout masih kosong</h3>
            <caption class="text-small">Yuk mulai isi checkout dengan mengklik tombol di bawah</caption>
            <div class="my-4">
                {{-- <a  class="btn btn-dark text-white" 
                onclick="return Swal.fire({title:'Keranjang Masih Kosong',icon:'info',text:'Silahkan mulai berbelanja dulu',confirmButtonText:'Mulai Belanja'}).then(ok=>{if(ok){window.location.href = '/allproducts'}})"> Mulai Belanja</a> --}}
                <a href="/allproducts" class="btn btn-primary" style="background-color: #A55FA5">Mulai Belanja</a>
            </div>
    
        </div>
        @else
        
            <form action="/place-order" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if (session('status')) 
                    <div class="alert alert-success"> {{ session('status') }} </div> 
                @endif
                <div class="row my-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6>Data Pembeli</h6>
                                <hr>
                                <img src="storage/{{ auth()->user()->image }}" class="justify-content-center w-25  mb-5">
                                <div class="row checkout-form">
                                    <div class="col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label for="alamat">Alamat Penerimaan</label>
                                        <textarea id="alamat" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label for="notelp">Nomor telepon</label>
                                        <input type="text" name="notelp" id="notelp" class="form-control" placeholder="Masukkan No. Telp" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6>Detail Belanja</h6>
                                <hr>
                                @php
                                    $total = 0;
                                @endphp
                                    @foreach ($cartitems as $item)
                                <table class="table table-responsive">
                                    <tr>
                                        <th>Gambar Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Banyak Produk</th>
                                        <th>Harga</th>
                                        <th>Hapus</th>
                                    </tr>
                                    
                                    <tr>
                                        <td >
                                            <img src="storage/{{ $item->products->image }}" width="100%">
                                        </td>
                                        <td >
                                            {{ $item->products->productname }}
                                        </td>
                                        <td >
                                            {{ $item->prod_qty }}
                                        </td>
                                        <td >
                                        Rp {{ $item->products->harga }}
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" onclick="Swal.fire({
                                                title: 'Apakah kamu yakin akan menghapusnya ?',
                                                text:'Apabila sudah dihapus, maka tidak dapat dikembalikan lagi',
                                                showDenyButton: true,
                                                icon:'question',
                                                confirmButtonText: 'Hapus',
                                                denyButtonText: `Tidak jadi`,
                                              }).then((result) => {
                                                /* Read more about isConfirmed, isDenied below */
                                                if (result.isConfirmed) {
                                                  window.location.href = '/hapus-checkout/{{ $item->id }}'
                                                } else if (result.isDenied) {
                                                  Swal.fire('Tidak jadi dihapus', '', 'info')
                                                }
                                              })"><i class="fa fa-trash" style="color: white"></i></a>
                                        </td>
                                    </tr>
                                </table>
                                @php
                                        $total += $item->products->harga * $item->prod_qty;
                                    @endphp
                                @endforeach
                                <div class="card-footer">
                                    
                                    <h4 class="font-weight-bold">Total Belanja : Rp {{ $total }}</h4>
                                    <button type="submit" class="btn btn-success container my-3">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection