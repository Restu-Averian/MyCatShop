@extends('layouts/main')

@section('container-isi')
    <a href="/kategori" class="btn btn-primary mb-4" style="background-color: #A55FA5">Tambah Kategori</a>
    <table class="table table-hover table-responsive-lg">
        <tr class="text-center">
            <th>No.</th>
            <th>Jenis Kategori</th>
            <th>Gambar Kategori</th>
            <th>Action</th>
        </tr>
        <?php $i=0; ?>  
        @forelse ($categories as $cat)
        <?php $i++  ?>
        <tr class="text-center ">
            <td>{{ $i }}</td>
            <td>{{ $cat->kategori }}</td>
            <td ><img src="{{ 'storage/' .$cat->image }}" style="width: 50%"></td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_{{ $cat->id }}">Detail</button> | <a href="edit/{{ $cat->id }}" class="btn btn-warning">Edit</a> | <a href="delete/{{ $cat->id }}" class="btn btn-danger">Delete</a>
                <div class="modal fade" id="view_{{ $cat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="storage/{{ $cat->image }}" alt="">
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <p><b>Nama Produk</b> : {{ $cat->kategori }}</p>
                                        <p><b>Tanggal Ditambahkan </b> : {{ $cat->created_at }}</p>
                                        <p><b>Tanggal Diupdate </b> : {{ $cat->updated_at }}</p>
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
        @empty
            <div class="alert alert-danger">Data kategori belum tersedia</div>
        @endforelse
    </table>
@endsection