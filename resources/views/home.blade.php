@extends('layouts.app')

@section('title', 'Home - MaezaFarm')

@section('content')
    <!-- Hero Start -->
    <div class="py-5 mb-5 container-fluid bg-primary hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-lg-start col-lg-4 col-md-6 text-start">
                    <h1 class="text-white display-1 text-uppercase mb-lg-4">Penyedia Kambing <span style="color:white;">Qurban & Aqiqah</span></h1>
                    <h1 class="text-white text-uppercase mb-lg-4">Mudah, Amanah, & Terpercaya</h1>
                    {{-- <p class="text-white font-modern d-none d-md-block fs-4 mb-lg-4">
                        Kami menyediakan layanan kambing qurban dan aqiqah yang berkualitas. Juga menerima program tabungan qurban untuk memudahkan perencanaan ibadah Anda.
                    </p> --}}

                    <!-- Tambahkan gambar di sini -->
                    {{-- <img src="{{ asset('img/bobot.png') }}" width="80%" height="80%" alt="Deskripsi Gambar" class="my-4 img-fluid"> --}}

                    {{-- <div class="pt-5 d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a href="#product" class="border-2 btn btn-outline-light py-md-3 px-md-5 me-5">Konsultasi</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/maezafarmofficial" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="m-0 text-white font-weight-normal ms-4 d-none d-sm-block">Play Video</h5>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Hero End -->

    <!-- About Start -->
    @include('partials.about')
    @include('partials.service')
    @include('components.special')
    @include('components.product')
    {{-- @include('components.pricing') --}}
    @include('components.testimoni')
    <!-- About End -->
@endsection
