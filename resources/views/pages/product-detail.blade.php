@extends('layouts.app')

@section('title', $dish->name)

@section('content')
<section class="page-header">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Menu</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ $dish->name }}</li>
            </ol>
        </nav>
        <h1 class="fw-bold mb-0">{{ $dish->name }}</h1>
    </div>
</section>

<section class="container py-5">
    <div class="card border-0 shadow-sm overflow-hidden">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ $dish->image_url }}" alt="{{ $dish->name }}" class="w-100 h-100 detail-img">
            </div>
            <div class="col-md-7">
                <div class="card-body p-4 p-lg-5">
                    <span class="badge badge-region mb-2">{{ $dish->origin_region }}</span>
                    <h2 class="fw-bold">{{ $dish->name }}</h2>
                    <p class="price-tag fs-3 mb-3">{{ $dish->price_text }}</p>
                    <p class="text-secondary">{{ $dish->description }}</p>

                    <h6 class="fw-semibold mt-4">Bahan Utama</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        @foreach ($dish->ingredient_list as $item)
                            <span class="badge rounded-pill text-bg-light border">{{ $item }}</span>
                        @endforeach
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ $dish->whatsapp_url }}" target="_blank" rel="noopener" class="btn btn-success btn-lg">
                            <i class="bi bi-whatsapp me-1"></i> Pesan via WhatsApp
                        </a>
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-lg">
                            <i class="bi bi-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($others->isNotEmpty())
        <h3 class="section-title mt-5 mb-4">Menu Lainnya</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($others as $other)
                @include('partials.dish-card', ['dish' => $other])
            @endforeach
        </div>
    @endif
</section>
@endsection
