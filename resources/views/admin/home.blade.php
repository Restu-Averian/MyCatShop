@extends('layouts/adminmain')

@section('container-admin')
<div class="container">
    <style>
        .countData {
            transition: 0.4s;
            
        }
        .countData:hover{
            transition: 0.4s;
            transform: translateY(-20px);
        }
    </style>    
    <div class="row justify-content-end">

        <a href="/data-penjualan" class="col-xl-3 col-sm-6 mb-xl-0 mb-4 countData">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">sell</i>
                    </div>
                    <div class=" text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Semua Penjualan</p>
                    </div>
                    
                </div>

                <div class="card-footer">
                    <h2 class="text-center">{{ $countPenjualan }}</h2>
                    
                </div>
            </div>
        </a>

        <a href="/data-user" class="col-xl-3 col-sm-6 mb-xl-0 mb-4 countData">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class=" text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Semua User</p>
                    </div>
                    {{-- {{ __('Dashboard') }} --}}
                </div>

                <div class="card-footer">
                    <h2 class="text-center">{{ $countUser }}</h2>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </a>
        <a href="/data-product" class="col-xl-3 col-sm-6 mb-xl-0 mb-4 countData">
            <div class="card ">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-danger shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class=" text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Semua Product</p>
                    </div>
                    
                </div>

                <div class="card-footer">
                    <h2 class="text-center">{{ $countProduct }}</h2>
                    
                </div>
            </div>
        </a>

        {{-- <a href="/data-kategori" class="col-xl-3 col-sm-6 mb-xl-0 mb-4 countData">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <div class=" text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Semua Kategori</p>
                    </div>
                    
                </div>

                <div class="card-footer">
                    <h2 class="text-center">6</h2>
                    
                </div>
            </div>
        </a> --}}
    </div>
</div>
@endsection