@extends('layouts/main')
@section('container-isi')
    <div class="container">

        <a href="/login" class="position-fixed btn btn-dark rounded-3 p-2 " style="color: white;background-color: rgba(0, 0, 0, 0.5);z-index:999">
            <i class='bx bx-arrow-back bx-md '></i>
          </a>

        <div class="row my-5">
            <div class="p-5 col-sm-5 ml-5 mr-5">
                <img src="/img/image26.svg" alt="" width="100%">
            </div>
            <div class="p-lg-5 ml-5 col-sm-5">
                <h1 class="font-weight-bold">Forgot Password</h1>
                <small class="form-text text-muted w-75 ">Send a link to your email to reset your password</small>

                <form action="/reset-password/" method="post" class="">
                <div class="mt-5 mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" style="width:90%">
                </div>
               
                <div class="mt-5 text-center">
                    <input type="submit" value="Send" class="btn btn-primary w-25" style="background-color: #A55FA5">
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection