<?php

namespace App\Http\Controllers;

use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        // 15 produk dibagi 3 halaman (5 produk per halaman).
        $dishes = Dish::orderBy('id')->paginate(5);

        return view('pages.products', compact('dishes'));
    }

    public function show(Dish $dish)
    {
        $others = Dish::whereKeyNot($dish->getKey())
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('pages.product-detail', compact('dish', 'others'));
    }
}
