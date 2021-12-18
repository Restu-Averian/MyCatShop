@extends('layouts/adminmain')

@section('container-admin')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-lg-10">
            <div class="card my-4 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-faded-primary-vertical shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white ps-3">Data Penjualan</h6>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <form action="/search" method="get" class="text-center w-50 ">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="search" class="border form-control" name="search" style="padding: 19px;" >
                                <button type="submit" class="btn btn-behance">Search</button>
    
                        </div>
                    </form>

                </div>
                <div class="card-body px-0 pb-2 m-auto  w-95"> 
                        <table class="table table-responsive m-auto align-items-center text-center" id="table-data">
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Nama Pembeli</th>
                                    <th>Barang</th>
                                    <th>Kuantitas</th>
                                    <th>Gambar Produk</th>
                                    <th>Jumlah Harga</th>
                                    <th>Status</th>
                                </tr>
                                @if ($order_item->count()===0)
                                <tr>
                                    <td colspan="7">Kosong</td>
                                </tr>
                            @endif
                                    @php
                                        $i = 0;
                                        $total = 0;
                                    @endphp
                                    @foreach ($order_item as $item)
                                    @php
                                        $i++;
                                    @endphp
                                <tr>
                                        <td ><?= $i; ?></td>
                                        <td >{{ $item->users->name }}</td>
                                        <td >{{ $item->products->productname }}</td>
                                        <td >{{ $item->qty }}</td>
                                        <td ><img src="storage/{{ $item->image }}" alt="Foto produk" width="100%"></td>
                                        <td >Rp
                                            @php
                                                $total = $item->qty*$item->harga;
                                                echo $total ;
                                            @endphp
                                        </td>
                                        <td class="text-center">
                                            <div class="my-2">
                                                @if ($item->status==0)
                                                    <li style="color: red;font-style: italic">Belum dikirim</li>
                                                @elseif($item->status==1)
                                                    <li style="color: #ffc107;font-style: italic">Sedang dikirim</li>
                                                    @elseif($item->status==2)
                                                    <li style="color: green;font-style: italic">Telah Sampai</li>

                                                @endif
                                            </div>
                                            <a href="/edit-data-penjualan/{{ $item->id }}" class="btn btn-primary d-block">Update Status</a>
                                        </td>
                                        
                                    
                                    @endforeach
                                    
                                </tr>
                        </table>
                </div>
            </div>
                        {{-- <div class="text-center mt-5 container">
                            {{ $products->links() }}
                        </div>
                        <p class="container">
                            Menampilkan {{ $categories->count() }} dari  {{ $categories->total() }}
                        </p>      --}}
                
        </div>
    </div>
</div>
@endsection