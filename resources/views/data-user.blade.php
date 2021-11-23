@extends('layouts/main')
@section('container-isi')

<table class="table table-hover">
    <tr class="text-center">
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Foto Profil</th>
        <th>Action</th>
    </tr>
    <?php $i=0; ?>
    @forelse ($user as $u)
    <?php $i++; ?>  
    <tr>
        <td>{{ $i}}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td class="text-center"><img src="storage/{{ $u->image }}" alt="" style="width: 30%"></td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_{{ $u->id }}">
                Detail
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="view_{{ $u->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Detail akun</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="storage/{{ $u->image }}" alt="" class="m-auto">
                        </div>
                        <div class="col-md-6">
                            <p><b>Nama </b> : {{ $u->name }}</p>
                            <p><b>Email </b> : {{ $u->email }}</p>
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
        <div class="alert alert-danger">Data user belum tersedia</div>
    @endforelse
</table>
    
@endsection