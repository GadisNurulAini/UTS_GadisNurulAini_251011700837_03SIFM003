@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Kontak & Lokasi</h1>
        <p class="mb-0 text-white-50">Hubungi kami untuk pemesanan dan informasi</p>
    </div>
</section>

<section class="container py-5">
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm mb-4"><div class="card-body p-4">
                <h5 class="fw-bold"><i class="bi bi-whatsapp text-success me-2"></i>WhatsApp</h5>
                <p class="mb-3">{{ config('store.wa_label') }}</p>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#waModal">
                    <i class="bi bi-chat-dots me-1"></i> Pesan Sekarang
                </button>
            </div></div>

            <div class="card border-0 shadow-sm mb-4"><div class="card-body p-4">
                <h5 class="fw-bold"><i class="bi bi-geo-alt text-brand me-2"></i>Alamat</h5>
                <p class="mb-3">{{ config('store.address') }}</p>
                <a href="{{ config('store.maps_url') }}" target="_blank" rel="noopener" class="btn btn-brand">
                    <i class="bi bi-map me-1"></i> Buka di Google Maps
                </a>
            </div></div>

            <div class="card border-0 shadow-sm"><div class="card-body p-4">
                <h5 class="fw-bold"><i class="bi bi-clock text-brand me-2"></i>Jam Buka</h5>
                <p class="mb-0">{{ config('store.hours') }}</p>
            </div></div>
        </div>

        <div class="col-lg-7">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-sm">
                <iframe src="{{ config('store.maps_embed') }}" style="border:0" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Lokasi {{ config('store.name') }}"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
