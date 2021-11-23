@extends('layouts/adminmain')
@section('container-admin')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-lg-10">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-faded-primary-vertical shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white ps-3">Data Produk</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2 m-auto w-95">
                    <a href="/addproduct" class="btn btn-primary mb-4 " style="background-color: #A55FA5">Tambah Produk</a>
                    <table class="table table-hover table-responsive m-auto align-items-center mb-3 ">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                            <th>Kategori</th>
                            <th>Gambar Produk</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @if ($product->count()===0)
                                <td colspan="7" class="text-center">Data produk tidak ada.</td>
                            @endif
                        </tr>
                        <?php $i=0; ?>  
                        {{-- @forelse ($product as $produk) --}}
                        @foreach ($product as $produk)
                        <?php $i++; ?>  
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td>{{ $produk->productname }}</td>
                            <td>{{ $produk->harga }}</td>
                            <td>{{ $produk->kuantitas }}</td>
                            <td>{{ $produk->kategori }}</td>
                            <td class="text-center"><img src="{{ 'storage/' .$produk->image }}" style="width: 60%"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#view_{{ $produk->id }}">Detail</button> | <a href="editpr/{{ $produk->id }}" class="btn btn-warning">Edit</a> | <a href="delete-produk/{{ $produk->id }}" onclick="return confirm('Yakin mau hapus ?')" class="btn btn-danger">Delete</a></td>
                
                                <div class="modal fade" id="view_{{ $produk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                                            <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="storage/{{ $produk->image }}" alt="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><b>Nama Produk</b> : {{ $produk->productname }}</p>
                                                        <p><b>Harga</b> : Rp {{ $produk->harga }}</p>
                                                        <p><b>Kategori</b> : {{ $produk->kategori }}</p>
                                                        <p><b>Kuantitas</b> : {{ $produk->kuantitas }}</p>
                                                        <p><b>Deskripsi</b> : {{ $produk->deskripsi }}</p>
                                                        <p><b>Tanggal Ditambahkan </b> : {{ $produk->created_at }}</p>
                                                        <p><b>Tanggal Diupdate </b> : {{ $produk->updated_at }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </tr>
                        {{-- @empty
                            <div class="alert alert-danger text-white">Data produk belum tersedia</div> --}}
                        {{-- @endforelse --}}
                        @endforeach
                </div>
            </div>
                    </table>
                    <div class="text-center mt-5 container">
                        {{ $product->links() }}
                    </div>
                    <p class="container">
                        Menampilkan {{ $product->count() }} dari  {{ $product->total() }}
                    </p>
        </div>
    </div>
</div>
@endsection