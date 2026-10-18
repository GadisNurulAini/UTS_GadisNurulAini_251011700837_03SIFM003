<div class="col dish-col">
    <div class="card dish-card h-100 border-0 shadow-sm">
        <div class="dish-img-wrap">
            <img src="{{ $dish->image_url }}" class="card-img-top" alt="{{ $dish->name }}" loading="lazy">
            <span class="badge badge-region position-absolute top-0 start-0 m-2">{{ $dish->origin_region }}</span>
        </div>
        <div class="card-body p-3 d-flex flex-column">
            <h6 class="card-title fw-bold mb-1">
                <a href="{{ route('products.show', $dish) }}" class="text-decoration-none text-dark">{{ $dish->name }}</a>
            </h6>
            <p class="price-tag small mb-2">{{ $dish->price_text }}</p>
            <p class="card-text text-secondary small flex-grow-1">{{ \Illuminate\Support\Str::limit($dish->description, 60) }}</p>
            <div class="d-flex gap-2 mt-2">
                <button type="button" class="btn btn-brand btn-sm flex-grow-1" data-bs-toggle="modal" data-bs-target="#detailModal" data-dish-id="{{ $dish->id }}">
                    <i class="bi bi-eye me-1"></i> Detail
                </button>
                <a href="{{ $dish->whatsapp_url }}" target="_blank" rel="noopener" class="btn btn-outline-success btn-sm" aria-label="Pesan {{ $dish->name }} via WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</div>