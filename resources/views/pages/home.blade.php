@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
{{-- HERO --}}
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-4 py-4 py-lg-5">
            <div class="col-lg-6 text-white">
                <span class="badge bg-warning text-dark mb-3 px-3 py-2">Kuliner Indonesia Timur</span>
                <h1 class="display-4 fw-bold">Selamat Datang di {{ config('store.name') }}</h1>
                <p class="lead mb-4">Nikmati hidangan khas Papua, Maluku, Sulawesi, dan Nusa Tenggara. Dari papeda hangat sampai konro bakar, semuanya siap dipesan lewat WhatsApp.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('products.index') }}" class="btn btn-warning btn-lg fw-semibold">
                        <i class="bi bi-grid me-1"></i> Lihat Menu
                    </a>
                    <button type="button" class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#waModal">
                        <i class="bi bi-whatsapp me-1"></i> Pesan Sekarang
                    </button>
                </div>
            </div>
            <div class="col-lg-6 text-center">
@php
    $heroDishes = \App\Models\Dish::inRandomOrder()->take(5)->get();
@endphp

<div id="heroMenu" class="carousel slide carousel-fade hero-menu" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-indicators">
        @foreach ($heroDishes as $i => $d)
            <button type="button" data-bs-target="#heroMenu" data-bs-slide-to="{{ $i }}"
                    class="{{ $i === 0 ? 'active' : '' }}" aria-label="{{ $d->name }}"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach ($heroDishes as $i => $d)
            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                <img src="{{ $d->image_url }}" class="d-block w-100" alt="{{ $d->name }}">
                <div class="carousel-caption hero-menu-caption">
                    <h5 class="mb-1">{{ $d->name }}</h5>
                    <p class="mb-2">{{ $d->price_text }}</p>
                    <a href="{{ route('products.show', $d) }}" class="btn btn-warning btn-sm">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroMenu" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroMenu" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>            </div>
        </div>
    </div>
</section>

{{-- 5 PRODUK --}}
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="section-title">Menu Pilihan Kami</h2>
        <p class="text-secondary mb-0">Lima hidangan favorit pelanggan {{ config('store.name') }}</p>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-3 justify-content-center">        @foreach ($dishes as $dish)
            @include('partials.dish-card', ['dish' => $dish])
        @endforeach
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('products.index') }}" class="btn btn-brand btn-lg px-5">
            Lihat Semua Menu <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
</section>

{{-- KEUNGGULAN --}}
<section class="bg-cream py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="feature-icon"><i class="bi bi-fire"></i></div>
                <h5 class="fw-bold">Rempah Autentik</h5>
                <p class="text-secondary mb-0">Resep tradisional dengan bumbu khas tiap daerah asalnya.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
                <h5 class="fw-bold">Dari Berbagai Daerah</h5>
                <p class="text-secondary mb-0">Papua, Maluku, Sulawesi, NTT, dan NTB dalam satu tempat.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon"><i class="bi bi-whatsapp"></i></div>
                <h5 class="fw-bold">Pesan Lewat WhatsApp</h5>
                <p class="text-secondary mb-0">Cari menu, klik pesan, dan langsung terhubung ke kami.</p>
            </div>
        </div>
    </div>
</section>
@endsection
