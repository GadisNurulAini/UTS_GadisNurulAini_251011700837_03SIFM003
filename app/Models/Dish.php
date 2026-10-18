<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes';

    protected $fillable = [
        'name', 'origin_region', 'ingredients', 'price', 'image', 'description',
    ];

    /** URL gambar dari folder public/assets/images/ */
    public function getImageUrlAttribute(): string
    {
        return asset('assets/images/' . $this->image);
    }

    /** Harga format rupiah, contoh: Rp 25.000 */
    public function getPriceTextAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    /** Bahan dipisah koma menjadi array */
    public function getIngredientListAttribute(): array
    {
        return array_values(array_filter(array_map('trim', explode(',', $this->ingredients))));
    }

    /** Link pesan WhatsApp untuk satu menu */
    public function getWhatsappUrlAttribute(): string
    {
        $text = "Halo " . config('store.name') . ", saya ingin memesan *{$this->name}* ({$this->price_text}). Apakah tersedia?";

        return 'https://wa.me/' . config('store.whatsapp') . '?text=' . rawurlencode($text);
    }
}
