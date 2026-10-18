<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        Dish::query()->delete();

        $dishes = [
            ['Papeda Kuah Kuning', 'Papua & Maluku', 'Sagu, ikan tongkol, kunyit, jeruk nipis, serai, kemangi, cabai rawit', 28000,
                'papeda-kuah-kuning.jpg', 'Bubur sagu kenyal yang disiram kuah kuning segar berisi ikan. Makanan pokok khas Papua dan Maluku yang disantap hangat.'],
            ['Ikan Bakar Colo-Colo', 'Maluku', 'Ikan kakap, kecap manis, cabai rawit, bawang merah, tomat, jeruk lemon cui', 45000,
                'ikan-bakar-colo-colo.jpg', 'Ikan bakar berbumbu sederhana yang disajikan dengan sambal colo-colo: irisan cabai, tomat, dan bawang dengan kecap dan jeruk.'],
            ['Coto Makassar', 'Sulawesi Selatan', 'Daging sapi, jeroan sapi, kacang tanah, rempah coto, bawang goreng, daun bawang', 35000,
                'coto-makassar.jpg', 'Sup daging sapi berkuah pekat dengan bumbu kacang dan rempah. Dinikmati bersama ketupat dan sambal.'],
            ['Konro Bakar', 'Sulawesi Selatan', 'Iga sapi, kluwak, ketumbar, lengkuas, kecap manis, sambal', 65000,
                'konro-bakar.jpg', 'Iga sapi empuk berbumbu kluwak yang dibakar dan dilumuri saus manis gurih. Teman makan yang pas adalah nasi hangat dan sambal.'],
            ['Pisang Epe', 'Sulawesi Selatan', 'Pisang kepok, gula merah, santan, keju, cokelat', 15000,
                'pisang-epe.jpg', 'Pisang kepok dipipihkan lalu dibakar dan disiram saus gula merah. Camilan khas pesisir Makassar yang manis dan legit.'],
            ['Sop Saudara', 'Sulawesi Selatan', 'Daging sapi, soun, perkedel, telur rebus, bawang goreng, seledri', 32000,
                'sop-saudara.jpg', 'Sop berkuah bening gurih dengan isian soun, daging, dan perkedel. Hidangan khas Pangkep yang cocok disantap di cuaca dingin.'],
            ['Tinutuan (Bubur Manado)', 'Sulawesi Utara', 'Beras, jagung, labu kuning, bayam, kangkung, kemangi, ikan asin', 22000,
                'tinutuan.jpg', 'Bubur sayuran khas Manado yang sehat dengan labu kuning dan jagung. Biasanya ditemani ikan asin dan sambal roa.'],
            ['Cakalang Fufu', 'Sulawesi Utara', 'Ikan cakalang, kayu bakar asap, cabai rawit, bawang merah, jeruk nipis', 48000,
                'cakalang-fufu.jpg', 'Ikan cakalang yang diasap hingga harum, lalu disajikan dengan sambal dabu-dabu. Lauk andalan masyarakat Minahasa.'],
            ['Ayam Woku Belanga', 'Sulawesi Utara', 'Ayam kampung, kemangi, daun jeruk, kunyit, cabai merah, tomat, serai', 38000,
                'ayam-woku-belanga.jpg', 'Ayam dimasak dengan bumbu woku kuning yang kaya rempah dan daun segar. Rasanya pedas gurih dan beraroma kemangi.'],
            ["Se'i Sapi", 'Nusa Tenggara Timur', 'Daging sapi, garam, kayu kosambi, sambal lu\'at, nasi', 55000,
                'sei-sapi.jpg', 'Daging sapi asap khas Kupang yang diasapi dengan kayu kosambi. Empuk, harum asap, dan disajikan bersama sambal lu\'at.'],
            ['Jagung Bose', 'Nusa Tenggara Timur', 'Jagung pulut, kacang merah, santan, garam, daun pandan', 20000,
                'jagung-bose.jpg', 'Bubur jagung pulut bersantan khas Timor yang gurih dan mengenyangkan. Lazim dinikmati bersama ikan atau daging asap.'],
            ['Ayam Taliwang', 'Nusa Tenggara Barat', 'Ayam kampung, cabai keriting, terasi Lombok, bawang putih, tomat, kecap', 42000,
                'ayam-taliwang.jpg', 'Ayam bakar bumbu cabai pedas khas Lombok. Disantap dengan plecing kangkung dan nasi putih.'],
            ['Plecing Kangkung', 'Nusa Tenggara Barat', 'Kangkung, tomat, cabai, terasi, kelapa parut, kacang tanah, jeruk limau', 18000,
                'plecing-kangkung.jpg', 'Kangkung rebus bersiram sambal tomat terasi yang segar pedas. Sayur pendamping wajib untuk hidangan khas Lombok.'],
            ['Kapurung', 'Sulawesi Selatan', 'Sagu, ikan, udang, sayur bayam, jagung, terong, jeruk nipis, kacang', 30000,
                'kapurung.jpg', 'Bola-bola sagu kenyal dalam kuah asam segar dengan sayur dan ikan. Makanan tradisional suku Luwu yang menyehatkan.'],
            ['Es Pisang Ijo', 'Sulawesi Selatan', 'Pisang raja, tepung terigu, santan, sirup merah, pandan, es serut', 17000,
                'es-pisang-ijo.jpg', 'Pisang dibalut adonan hijau pandan, disajikan dengan bubur sumsum, sirup merah, dan es serut. Segar dan manis.'],
        ];

        foreach ($dishes as [$name, $region, $ingredients, $price, $image, $description]) {
            Dish::create([
                'name'          => $name,
                'origin_region' => $region,
                'ingredients'   => $ingredients,
                'price'         => $price,
                'image'         => $image,
                'description'   => $description,
            ]);
        }
    }
}