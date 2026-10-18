<?php

namespace App\Providers;

use App\Models\Dish;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Pagination memakai tampilan Bootstrap 5.
        Paginator::useBootstrapFive();

        // Data semua menu dikirim ke layout untuk popup detail & popup pencarian WhatsApp.
        View::composer('layouts.app', function ($view) {
            $menu = Dish::orderBy('id')->get()->map(fn ($d) => [
                'id'          => $d->id,
                'name'        => $d->name,
                'region'      => $d->origin_region,
                'ingredients' => $d->ingredient_list,
                'price'       => $d->price_text,
                'image'       => $d->image_url,
                'description' => $d->description,
                'detail_url'  => route('products.show', $d),
                'wa_url'      => $d->whatsapp_url,
            ])->values();

            $view->with('menuJson', $menu);
        });
    }
}
