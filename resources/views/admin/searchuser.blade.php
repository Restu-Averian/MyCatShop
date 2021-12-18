@extends('layouts/adminmain')
@section('container-admin')
<div class="container">
  <div class="row justify-content-end">
    <div class="col-md-10">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-faded-primary-vertical shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white ps-3">Data User</h6>
          </div>
        </div>
        <form action="/searchuser" method='get'>
          {{ csrf_field() }}
          <div class="input-group">
              <input type="search" name="search" id="search">
              <button type="submit">Search</button>
          </div>
      </form>
        <div class="card-body px-0 pb-2 m-auto w-95">
          <table class="table table-hover table-responsive m-auto align-items-center mb-3">
            <tr class="text-center">
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Foto Profil</th>
                <th>Action</th>
            </tr>
            @if ($user->count()===0)
            <tr>
              <td colspan="5" class="text-center">Data user tidak ada.</td>
            </tr>
                
            @endif
            <?php $i=0; ?>
            @foreach ($user as $u)
            <?php $i++; ?>  
            <tr class="text-center">
                <td>{{ $i}}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td class="text-center"><img src="storage/{{ $u->image }}" alt="" style="width: 30%"></td>
                <td>
                    <button type="button" class="btn btn-behance" data-bs-toggle="modal" data-bs-target="#view_{{ $u->id }}">
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
                                    <img src="storage/{{ $u->image }}" width="80%" alt="" class="m-auto">
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
           
            @endforeach
        </div>
      </div>
      
      </table>
      <div class="text-center mt-5 container">
          {{ $user->links() }}
      </div>
      <p class="container ">
        Menampilkan {{ $user->count() }} dari {{ $user->total() }}
      </p>
    </div>
  </div>
</div>
@endsection