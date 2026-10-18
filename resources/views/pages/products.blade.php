@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Menu Selera</h1>
        <p class="mb-0 text-white-50">Galeri kuliner Indonesia Timur</p>
    </div>
</section>

<section class="container py-5">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
    </div>

<div id="dishContainer" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-3">        @foreach ($dishes as $dish)
            @include('partials.dish-card', ['dish' => $dish])
        @endforeach
    </div>

    <nav class="mt-5 d-flex justify-content-center" aria-label="Navigasi halaman produk">
        {{ $dishes->links() }}
    </nav>
</section>
@endsection
