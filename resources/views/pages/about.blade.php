@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Tentang Kami</h1>
        <p class="mb-0 text-white-50">Mengenal {{ config('store.name') }}</p>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
@php
    $aboutDishes = \App\Models\Dish::inRandomOrder()->take(5)->get();
@endphp

<div id="aboutMenu" class="carousel slide carousel-fade hero-menu" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-indicators">
        @foreach ($aboutDishes as $i => $d)
            <button type="button" data-bs-target="#aboutMenu" data-bs-slide-to="{{ $i }}"
                    class="{{ $i === 0 ? 'active' : '' }}" aria-label="{{ $d->name }}"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach ($aboutDishes as $i => $d)
            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                <img src="{{ $d->image_url }}" class="d-block w-100" alt="{{ $d->name }}">
                <div class="carousel-caption hero-menu-caption">
                    <h6 class="mb-1">{{ $d->name }}</h6>
                    <small>{{ $d->price_text }}</small>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#aboutMenu" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#aboutMenu" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>        </div>
        <div class="col-lg-6">
            <h2 class="section-title text-start">Cerita {{ config('store.name') }}</h2>
            <p class="text-secondary">{{ config('store.name') }} adalah usaha kuliner yang menyajikan hidangan khas Indonesia Timur. Kami memperkenalkan kekayaan rasa dari Papua, Maluku, Sulawesi, Nusa Tenggara Timur, dan Nusa Tenggara Barat kepada lebih banyak orang.</p>
            <p class="text-secondary">Setiap menu dibuat dengan bumbu dan cara memasak tradisional, sehingga rasa aslinya tetap terjaga. Anda dapat melihat daftar menu di situs ini dan memesannya dengan mudah lewat WhatsApp.</p>
            <a href="{{ route('products.index') }}" class="btn btn-brand mt-2">Lihat Produk Kami</a>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm"><div class="card-body p-4">
                <h4 class="fw-bold"><i class="bi bi-bullseye text-brand me-2"></i>Visi</h4>
                <p class="text-secondary mb-0">Menjadi pilihan utama untuk menikmati dan mengenal kuliner Indonesia Timur yang autentik.</p>
            </div></div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm"><div class="card-body p-4">
                <h4 class="fw-bold"><i class="bi bi-flag text-brand me-2"></i>Misi</h4>
                <ul class="text-secondary mb-0 ps-3">
                    <li>Menyajikan masakan daerah dengan rasa asli.</li>
                    <li>Memakai bahan segar dan bumbu pilihan.</li>
                    <li>Memudahkan pemesanan lewat WhatsApp.</li>
                </ul>
            </div></div>
        </div>
    </div>

    <div class="row g-4 mt-2 text-center">
        <div class="col-6 col-md-3"><div class="stat"><span>15</span>Menu</div></div>
        <div class="col-6 col-md-3"><div class="stat"><span>5</span>Wilayah Asal</div></div>
        <div class="col-6 col-md-3"><div class="stat"><span>3</span>Halaman Katalog</div></div>
        <div class="col-6 col-md-3"><div class="stat"><span><i class="bi bi-whatsapp"></i></span>Pesan Cepat via WA</div></div>
    </div>
</section>
@endsection
