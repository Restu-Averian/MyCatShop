@extends('layouts/main')
@section('container-isi')
<div class="container">
    <a href="/profile" class="position-fixed btn btn-dark rounded-3 p-2 " style="color: white;background-color: rgba(0, 0, 0, 0.5);z-index:999">
        <i class='bx bx-arrow-back bx-md '></i>
      </a>
    
    <h3 class="text-center">Ganti Email</h3>
    @if ($message=Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <form action="update-email/{{ auth()->user()->id }}" method="post">
        {{ csrf_field() }}
        <div class="form-group my-4">
            <div class="col-6 m-auto">
                <div class="mb-4">
                    <label for="" class="form-label">Email Lama : </label>
                    <input type="email" name="email" id="" class="form-control" value="{{ auth()->user()->email }}" disabled>
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Email Baru : </label>
                    <input type="email" name="email" id="" class="form-control" value="" required>
                </div>
                <div class="mt-5">
                    <input type="submit" class="btn btn-primary" style="background-color: #A55FA5" value="Ganti Email">
                </div>

            </div>
        </div>
    </form>

</div>
@endsection