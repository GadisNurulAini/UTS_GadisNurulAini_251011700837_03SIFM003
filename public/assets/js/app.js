(function () {
    'use strict';

    var MENU = window.MENU || [];
    var waLink = function (d) { return d.wa_url; };

    // ---------- POPUP DETAIL PRODUK ----------
    var detailModal = document.getElementById('detailModal');
    if (detailModal) {
        detailModal.addEventListener('show.bs.modal', function (event) {
            var trigger = event.relatedTarget;
            if (!trigger) { return; }
            var id = parseInt(trigger.getAttribute('data-dish-id'), 10);
            var d = MENU.find(function (m) { return m.id === id; });
            if (!d) { return; }

            document.getElementById('detailImage').src = d.image;
            document.getElementById('detailImage').alt = d.name;
            document.getElementById('detailName').textContent = d.name;
            document.getElementById('detailRegion').textContent = d.region;
            document.getElementById('detailPrice').textContent = d.price;
            document.getElementById('detailDesc').textContent = d.description;
            document.getElementById('detailPage').href = d.detail_url;
            document.getElementById('detailWa').href = waLink(d);

            var box = document.getElementById('detailIngredients');
            box.innerHTML = '';
            d.ingredients.forEach(function (item) {
                var span = document.createElement('span');
                span.className = 'badge rounded-pill text-bg-light border';
                span.textContent = item;
                box.appendChild(span);
            });
        });
    }

    // ---------- POPUP WHATSAPP + PENCARIAN MAKANAN ----------
    var waModal = document.getElementById('waModal');
    var waSearch = document.getElementById('waSearch');
    var waResults = document.getElementById('waResults');
    var waEmpty = document.getElementById('waEmpty');

    function renderResults(keyword) {
        var q = (keyword || '').trim().toLowerCase();
        var found = MENU.filter(function (d) {
            if (q === '') { return true; }
            var hay = (d.name + ' ' + d.region + ' ' + d.ingredients.join(' ') + ' ' + d.description).toLowerCase();
            return hay.indexOf(q) !== -1;
        });

        waResults.innerHTML = '';
        waEmpty.classList.toggle('d-none', found.length > 0);

        found.forEach(function (d) {
            var row = document.createElement('div');
            row.className = 'list-group-item d-flex align-items-center gap-3 wa-item';

            var img = document.createElement('img');
            img.src = d.image; img.alt = d.name;

            var info = document.createElement('div');
            info.className = 'flex-grow-1';
            var name = document.createElement('div');
            name.className = 'fw-semibold'; name.textContent = d.name;
            var meta = document.createElement('small');
            meta.className = 'text-muted'; meta.textContent = d.region + ' \u00B7 ' + d.price;
            info.appendChild(name); info.appendChild(meta);

            var btn = document.createElement('a');
            btn.className = 'btn btn-success btn-sm';
            btn.href = waLink(d); btn.target = '_blank'; btn.rel = 'noopener';
            btn.innerHTML = '<i class="bi bi-whatsapp me-1"></i>Pesan';

            row.appendChild(img); row.appendChild(info); row.appendChild(btn);
            waResults.appendChild(row);
        });
    }

    if (waModal && waSearch) {
        renderResults('');
        waSearch.addEventListener('input', function () { renderResults(waSearch.value); });
        waModal.addEventListener('shown.bs.modal', function () { waSearch.focus(); });
        waModal.addEventListener('hidden.bs.modal', function () { waSearch.value = ''; renderResults(''); });
    }

    // ---------- TOGGLE TAMPILAN GRID / DAFTAR ----------
    var container = document.getElementById('dishContainer');
    var btnGrid = document.getElementById('viewGrid');
    var btnList = document.getElementById('viewList');

    if (container && btnGrid && btnList) {
        function setView(mode) {
            container.classList.toggle('list-mode', mode === 'list');
            btnGrid.classList.toggle('active', mode !== 'list');
            btnList.classList.toggle('active', mode === 'list');
            try { localStorage.setItem('dishView', mode); } catch (e) { /* abaikan */ }
        }
        var saved = 'grid';
        try { saved = localStorage.getItem('dishView') || 'grid'; } catch (e) { /* abaikan */ }
        setView(saved);
        btnGrid.addEventListener('click', function () { setView('grid'); });
        btnList.addEventListener('click', function () { setView('list'); });
    }
})();
