@extends('layouts/adminmain')

@section('container-admin')
<div class="input-group mt-5 justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <style>
                            .icon-back {   
                                height: 40px;
                                color: #272727;
                                transition: 0.4s;
                            }
                            .icon-back:hover{
                                background-color: rgba(0, 0, 0,0.2);
                                border-radius: 50px;
                                transition: 0.4s;
                            }
                        </style>
                        <!--Daftar Akun-->
                        <a href="/data-penjualan" class="icon-back" ><i class='bx bx-arrow-back bx-md justify-content-center'></i></a>
                        <p class="h2 mb-5 font-weight-bold text-center">Edit Status</p>
                        <form class="pb-5 col-sm-12 " action="{{ url('proses-edit-data-penjualan',$order_item->id) }}" method="POST" >
                        {{-- @csrf --}}
                        {{ csrf_field() }}
                            @if ($message = Session::get('success'))
                                <p class="alert alert-success text-white">{{ $message }}</p>
                            @endif
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <div class="border table-active text-center">
                                        Detail Pembelian
                                    </div>
                                    <div class="border p-2">
                                        <div class="text-center mb-4">Gambar : <img src="/storage/{{ $order_item->image }}" alt="" width="50%"></div>
                                        <div class="ml-auto">Nama Pembeli : {{ $orders->name }}</div>
                                        <div class="ml-auto">Nama Produk : {{ $order_item->products->productname }}</div>
                                        <div class="ml-auto">Kuantitas : {{ $order_item->qty }}</div>
                                        <div class="ml-auto">Alamat : {{ $orders->alamat }}</div>
                                        <div class="ml-auto">No telp : {{ $orders->notelp }}</div>
                                        <div class="ml-auto">Jumlah Harga : Rp
                                            @php
                                                $total = $order_item->qty*$order_item->harga;
                                                echo $total ;
                                            @endphp
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 ml-auto">
                                <div class="row p-2">
                                    <div class="table-active text-center">
                                        Informasi Status Produk
                                    </div>
                                    <div class="border">
                                        Status produk saat ini : 
                                        @if ($order_item->status==0)
                                            <li style="color: red;font-style: italic;">Belum kirim</li>
                                        @elseif($order_item->status==1)
                                            <li style="color: #ffc107;font-style: italic;">Sedang kirim</li>
                                        @elseif($order_item->status==2)
                                            <li style="color: green;font-style: italic;">Telah Sampai</li>
                                        @endif

                                        <div class="row">
                                            <div class="ml-auto d-flex my-3">
                                                <div class="ml-auto">Ganti Status :</div> 
                                                <select class="form-select" name="status" multiple aria-label="multiple select example">
                                                    <option value="0">Belum dikirim</option>
                                                    <option value="1">Sedang dikirim</option>
                                                    <option value="2">Telah Sampai</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-lg-5 w-50 m-auto">
                                    

                                  
                                    <input class="btn btn-primary" name="tambah" style="background-color: #A55FA5;font-weight: 600" type="submit" value="Edit Status">
                                </div>
                            </div>
                        </div>
                            
                    
                            
                            {{-- @if(count($errors))
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif --}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection