<?php

namespace App\Http\Controllers;

use App\Models\Dish;

class PageController extends Controller
{
    public function home()
    {
        // Beranda hanya menampilkan 5 produk.
        $dishes = Dish::orderBy('id')->take(5)->get();

        return view('pages.home', compact('dishes'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
