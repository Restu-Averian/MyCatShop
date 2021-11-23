@extends('layouts/main')

@section('container-isi')
<div class="container" style="margin-top: 30px;">
    <h3 style="font-weight: bold;">Profil</h3>
    <hr>
    @if ($message=Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
    @endif
    <div id="tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="akun-tab" data-bs-toggle="tab" data-bs-target="#akun"
                    type="button" role="tab" aria-controls="akun" aria-selected="true">Informasi Akun</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="riwayat-tab" data-bs-toggle="tab" data-bs-target="#riwayat"
                    type="button" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat Pembelian</button>
            </li>
        </ul>
    
        <div class="tab-content">
            <div class="tab-pane fade show active my-5" id="akun" role="tabpanel" aria-labelledby="akun-tab">
                <div class="row align-items-center">
                    <div class="col" style="margin-left: 70px;">
                        <img src="storage/{{ $users->image }}" class="img-thumbnail" alt="..." style="width: 60%;">
                        <style>
                            input[type="file"]{
                                color: transparent;
                                margin: 30px auto;
                            }
                        </style>
                        <input type="file" />
                        <script>
                            
                                $(function () {
                                    $('input[type="file"]').change(function () {
                                        if ($(this).val() != "") {
                                                $(this).css('color', '#333');
                                        }else{
                                                $(this).css('color', 'transparent');
                                        }
                                    });
                                })
                        </script>
                    </div>
                    <div class="col">
                        
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Nama</label>
                                <a href="/change-nama" >
                                    <input type="name" class="form-control" style="cursor: pointer;" name="name" id="name" value="{{ $users->name }}" disabled>
                                </a>
                                <small class="form-text text-muted mb-2">Klik untuk mengganti nama</small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <a href="/change-email">
                                    <input type="email" class="form-control" style="cursor: pointer;" name="email" id="email" value="{{ $users->email }}" disabled>
                                </a>
                                <small class="form-text text-muted mb-2">Klik untuk mengganti email</small>
                            </div>
                            <div class="mb-3" >
                                <label for="password" class="form-label">Password</label>
                                <a href="/change-password" > 
                                    <input type="password" style="cursor: pointer;" class="form-control" name="password" id="password" value="{{ $users->password }}" disabled>
                                </a>
                                <small class="form-text text-muted mb-2">Klik untuk mengganti password</small>
                            </div>
                            <div class="mb-3">
                                <a href="/hapus-akun" class="btn btn-danger">Hapus Akun</a>
                            </div>
                            {{-- <div class="mb-3">
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
                            </div> --}}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade my-5" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                @php
                    $i = 0;
                    $total = 0;$totharga=0;
                @endphp
                
                <table class="table table-hover table-responsive text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Banyak Barang</th>
                        <th>Gambar Produk</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($order_item as $pesanbarang)
                        @php
                            $i++
                        @endphp
                        <tr>
                            <td><?php echo $i?></td>
                            <td>{{ $pesanbarang->products->productname }}</td>
                            <td>{{ $pesanbarang->qty }}</td>
                            <td><img src="storage/{{ $pesanbarang->image }}" width="50%"></td>
                            <td>Rp @php
                                $total= $pesanbarang->qty * $pesanbarang->harga;
                                //$totharga+= $pesanbarang->qty * $pesanbarang->harga;
                                echo $total;
                            @endphp</td>
                            <td>@php
                                    $status = $pesanbarang->status;
                                @endphp
                                @if ($status==0)
                                    <li style="color: red">Belum kirim</li>
                                @elseif($status==1)
                                    <li style="color: #ffc107">Sedang kirim</li>
                                @elseif($status==2)
                                    <li style="color: green">Telah Sampai</li>
                                @endif
                            </td>
                            <td>
                                @if ($status==0)
                                    <a href="hapuscheckout/{{ $pesanbarang->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                @else
                                    Tidak bisa hapus
                                @endif
                            </td>
                        </tr>
                        
                        @empty
                            <tr>
                                <a href="/allproducts" class="btn btn-primary mb-3" style="background-color: #A55FA5">Mulai Belanja</a>
                                <td colspan="5">Data Kosong</td>
                            </tr>
                        @endforelse
                        {{-- <tr>
                            <td colspan="2">
                                Total Pembayaran : 
                            </td>
                            <td colspan="2">
                               Rp <h4 class="font-weight-bold"><?= $totharga++?></h4>
                            </td>
                        </tr> --}}
                </table>
            </div>
        </div>
    </div>
    
</div>

@endsection
   