@extends('layouts/main')
@section('container-isi')
    <div class="container">
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
                            <img src="storage/{{ auth()->user()->image }}" class="justify-content-center w-50 mb-5">
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat">Alamat Penerimaan</label>
                                    <textarea id="alamat" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                                </div>
                                <div class="col-md-6">
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
                            <h6>Order Details</h6>
                            <hr>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cartitems as $item)
                            <div class="row">
                                    <div class="col-md-3 p-3" >
                                        <img src="storage/{{ $item->products->image }}" width="100%">
                                    </div>
                                    <div class="col-md-4 p-3" >
                                        {{ $item->products->productname }}
                                    </div>
                                    <div class="col-md-2 p-3" >
                                        {{ $item->prod_qty }}
                                    </div>
                                    <div class="col-md-3 p-3" >
                                    Rp {{ $item->products->harga }}
                                    </div>
                            </div>
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
    </div>
@endsection