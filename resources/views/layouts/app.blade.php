<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | {{ config('store.name') }} - Kuliner Indonesia Timur</title>
    <meta name="description" content="{{ config('store.name') }} - {{ config('store.tagline') }}. Pesan mudah lewat WhatsApp.">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo.svg') }}">

    {{-- Bootstrap dari folder lokal public/Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Bootstrap/icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.modals')

    {{-- Tombol WhatsApp melayang: membuka popup pencarian makanan --}}
    <button type="button" class="wa-float" data-bs-toggle="modal" data-bs-target="#waModal" aria-label="Pesan lewat WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </button>

    <script>
        window.MENU  = @json($menuJson);
        window.STORE = @json(['name' => config('store.name'), 'wa' => config('store.whatsapp')]);
    </script>
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
