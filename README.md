# Rasa Timur - Galeri Kuliner Indonesia Timur
UTS Rekayasa Web | Laravel 13 + Blade + Bootstrap 5 | NIM 251011700837 (tema 7: Galeri Kuliner Daerah, tabel `dishes`)

## Menjalankan
1. `composer install`
2. Buat database MySQL `db_uts_251011700837` (phpMyAdmin / Laragon / XAMPP)
3. `.env` sudah terisi (MySQL, user `root`, tanpa password). Sesuaikan jika berbeda.
4. `php artisan key:generate`
5. `php artisan migrate --seed`
6. `php artisan serve` lalu buka http://127.0.0.1:8000

## Struktur penting
- `database/migrations/2026_10_18_000001_create_dishes_table.php`
- `database/seeders/DishSeeder.php` (15 menu)
- `app/Models/Dish.php`, `app/Http/Controllers/{PageController,DishController}.php`
- `resources/views/layouts/app.blade.php` + `partials/` + `pages/`
- `public/Bootstrap/` (Bootstrap lokal), `public/assets/images/` (gambar), `public/assets/{css,js}`
- `config/store.php` (nama toko, nomor WhatsApp, alamat, jam buka)
