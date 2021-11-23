@extends('layouts/adminmain')

@section('container-admin')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-lg-10">
            <div class="card my-4 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-faded-primary-vertical shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white ps-3">Data Kategori</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2 m-auto  w-95"> 
                        <table class="table table-hover table-responsive m-auto align-items-center" id="table-data">
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Jenis Kategori</th>
                                    <th>Gambar Kategori</th>
                                    <th>Action</th>
                                </tr>
                                {{-- @if ($categories->count() === 0)
                                <tr>
                                    <td colspan="4" class="text-center">Data kategori tidak ada.</td>
                                </tr>
                                @endif --}}
                                <tr class="text-center ">
                                    <td>1</td>
                                    <td>Kucing</td>
                                    <td ><img src="/img/kategoriKucing.svg" style="width: 30%"></td>
                                    <td>
                                        <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#modal1">Detail</button> 
                                        {{-- | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a> --}}
                                        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="/img/kategoriKucing.svg" width="80%" alt="">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <p><b>Nama Kategori</b> : Kucing</p>
                                                                <p><b>Banyak Produk</b> : {{ $CountKucing }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center ">
                                    <td>2</td>
                                    <td>Wet Food</td>
                                    <td ><img src="/img/kategoriWetFood.svg" style="width: 30%"></td>
                                    <td>
                                        <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#modal2">Detail</button> 
                                        {{-- | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a> --}}
                                        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="/img/kategoriWetFood.svg" width="80%" alt="">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <p><b>Nama Kategori</b> : Wet Food</p>
                                                                <p><b>Banyak Produk</b> : {{ $CountWetFood }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center ">
                                    <td>3</td>
                                    <td>Dry Food</td>
                                    <td ><img src="/img/kategoriDryFood.svg" style="width: 30%"></td>
                                    <td>
                                        <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#modal3">Detail</button> 
                                        {{-- | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a> --}}
                                        <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="/img/kategoriDryFood.svg" width="80%" alt="">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <p><b>Nama Kategori</b> : Dry Food</p>
                                                                <p><b>Banyak Produk</b> : {{ $CountDryFood }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center ">
                                    <td>4</td>
                                    <td>Cat Toys</td>
                                    <td ><img src="/img/kategoriMainan.svg" style="width: 30%"></td>
                                    <td>
                                        <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#modal4">Detail</button> 
                                        {{-- | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a> --}}
                                        <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="/img/kategoriMainan.svg" width="80%" alt="">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <p><b>Nama Kategori</b> : Cat Toys</p>
                                                                <p><b>Banyak Produk</b> : {{ $CountCatToys }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center ">
                                    <td>5</td>
                                    <td>Perlengkapan Pasir</td>
                                    <td ><img src="/img/kategoriPerlengkapan.svg" style="width: 30%"></td>
                                    <td>
                                        <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#modal5">Detail</button> 
                                        {{-- | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a> --}}
                                        <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="/img/kategoriPerlengkapan.svg" width="80%" alt="">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <p><b>Nama Kategori</b> : Perlengkapan Pasir</p>
                                                                <p><b>Banyak Produk</b> : {{ $CountPerlengkapan }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center ">
                                    <td>6</td>
                                    <td>Obat Kucing</td>
                                    <td ><img src="/img/kategoriObat.svg" style="width: 30%"></td>
                                    <td>
                                        <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#modal6">Detail</button> 
                                        {{-- | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a> --}}
                                        <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="/img/kategoriObat.svg" width="80%" alt="">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <p><b>Nama Kategori</b> : Obat Kucing</p>
                                                                <p><b>Banyak Produk</b> : {{ $CountObat }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            
                </div>
            </div>
                        </table>
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