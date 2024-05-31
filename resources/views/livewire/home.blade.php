@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- banner --}}
        <div class="banner">
            <img src="{{ url('assets/slider/slider1.png') }} " alt="banner">
        </div>
        {{-- end banner --}}

        {{-- categories --}}
        <div class="pilih-categories mt-4">
            <h3><strong>Pilih Kategori</strong></h3>
            <div class="row mt-4">
                @foreach ($categories as $category)
                    <div class="col-lg-3 col-sm-6">
                        {{-- card --}}
                        <div class="card shadow mb-4">
                            <div class="card-body text-center">
                                <img src="{{ url('assets/category') }}/{{ $category->gambar }}" alt="category"
                                    class="img-fluid">
                                <h4 class="card-title"><b>{{ $category->nama }}</b></h4>
                            </div>
                        </div>
                        {{-- end card --}}
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end categories --}}

        {{-- Best Products --}}
        <div class="produk-pilihan my-5">
            <h3><strong>Produk Pilihan</strong></h3>
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
        {{-- end best products --}}
    </div>
@endsection
