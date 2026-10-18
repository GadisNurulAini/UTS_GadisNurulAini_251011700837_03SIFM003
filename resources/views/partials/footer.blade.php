<footer class="site-footer mt-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-5">
                <h5 class="fw-bold d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="" width="32" height="32"> {{ config('store.name') }}
                </h5>
                <p class="mb-0 text-white-50">{{ config('store.tagline') }}. Menghadirkan hidangan khas Papua, Maluku, Sulawesi, dan Nusa Tenggara ke meja makan Anda.</p>
            </div>
            <div class="col-6 col-lg-3">
                <h6 class="fw-semibold">Navigasi</h6>
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('products.index') }}">Produk</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-4">
                <h6 class="fw-semibold">Hubungi Kami</h6>
                <ul class="list-unstyled mb-0 text-white-50">
                    <li><i class="bi bi-whatsapp me-2"></i>{{ config('store.wa_label') }}</li>
                    <li><i class="bi bi-geo-alt me-2"></i>{{ config('store.address') }}</li>
                    <li><a href="{{ config('store.maps_url') }}" target="_blank" rel="noopener"><i class="bi bi-map me-2"></i>Buka Google Maps</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="small text-white-50 mb-0 text-center">&copy; {{ date('Y') }} {{ config('store.name') }} &middot; UTS Rekayasa Web &middot; NIM 251011700837</p>
    </div>
</footer>
