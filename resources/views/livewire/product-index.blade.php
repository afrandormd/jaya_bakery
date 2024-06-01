@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- breadcrumb --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Products</li>
                    </ol>
                </nav>
                {{-- end breadcrumb --}}
                {{-- products header --}}
                <div class="row">
                    <div class="col-md-9">
                        <h2><strong>List Products</strong></h2>
                    </div>
                    {{-- search box --}}
                    {{-- dinonaktifkan karena belum berfungsi --}}
                    {{-- <div class="col-md-3">
                        <div class="input-group mb-3">
                            <input wire:model.live="search" type="text" class="form-control" placeholder="Search . . ."
                                aria-label="Search" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div> --}}
                    {{-- end search --}}
                </div>
                {{-- end products header --}}
                {{-- Products --}}
                <div class="produk mb-5">
                    <div class="row mt-4">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-sm-12">
                                {{-- card --}}
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="{{ url('assets/products') }}/{{ $product->gambar }}" alt="category"
                                            class="img-fluid">
                                        {{-- card description --}}
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <h5 class="card-title"><strong>{{ $product->nama }}</strong></h5>
                                                <h5>Rp. {{ number_format($product->harga) }}</h5>
                                            </div>
                                        </div>
                                        {{-- end card description --}}
                                        {{-- button detail --}}
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <a href="#" class="btn btn-dark btn-block w-100">Detail</a>
                                            </div>
                                        </div>
                                        {{-- end button detail --}}
                                    </div>
                                </div>
                                {{-- end card --}}
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- end products --}}
                {{-- pagination --}}
                <div class="row">
                    <div class="col">
                        {{ $products->links() }}
                    </div>
                </div>
                {{-- end pagination --}}
            </div>
        </div>

    </div>
@endsection
