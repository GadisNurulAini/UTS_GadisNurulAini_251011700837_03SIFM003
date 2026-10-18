{{-- POPUP DETAIL PRODUK (diisi oleh assets/js/app.js) --}}
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold" id="detailTitle">Detail Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-md-5">
                        <img id="detailImage" src="" alt="" class="img-fluid rounded-4 w-100">
                    </div>
                    <div class="col-md-7">
                        <span class="badge badge-region mb-2" id="detailRegion"></span>
                        <h4 class="fw-bold mb-1" id="detailName"></h4>
                        <p class="price-tag fs-4 mb-3" id="detailPrice"></p>
                        <p id="detailDesc" class="text-secondary"></p>
                        <h6 class="fw-semibold">Bahan Utama</h6>
                        <div id="detailIngredients" class="d-flex flex-wrap gap-2"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" id="detailPage" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-up-right me-1"></i> Halaman Detail</a>
                <a href="#" id="detailWa" target="_blank" rel="noopener" class="btn btn-success"><i class="bi bi-whatsapp me-1"></i> Pesan via WhatsApp</a>
            </div>
        </div>
    </div>
</div>

{{-- POPUP WHATSAPP: cari makanan lalu pesan --}}
<div class="modal fade" id="waModal" tabindex="-1" aria-labelledby="waTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0">
            <div class="modal-header wa-head text-white">
                <h5 class="modal-title" id="waTitle"><i class="bi bi-whatsapp me-2"></i>Pesan via WhatsApp</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <label for="waSearch" class="form-label fw-semibold">Cari makanan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="search" id="waSearch" class="form-control" placeholder="Contoh: coto, ikan, pedas, Manado..." autocomplete="off">
                </div>
                <div id="waResults" class="list-group"></div>
                <p id="waEmpty" class="text-center text-muted my-4 d-none">Makanan tidak ditemukan. Coba kata kunci lain.</p>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-muted">Klik <strong>Pesan</strong> untuk membuka chat WhatsApp {{ config('store.wa_label') }}.</small>
                <a href="https://wa.me/{{ config('store.whatsapp') }}?text={{ rawurlencode('Halo '.config('store.name').', saya ingin bertanya tentang menu.') }}"
                target="_blank" rel="noopener" class="btn btn-outline-success btn-sm">Chat langsung</a>
            </div>
        </div>
    </div>
</div>
