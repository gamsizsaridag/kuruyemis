<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Karışık Çiğ',
                'price' => 99.90,
                'discountedPrice' => 89.90,
                'description' => "Tamamı Doğal ve Çiğ Ürünlerden Oluşan Lezzet Şöleni..
                                    Çiğ Kaju, Çiğ Badem, Çiğ Fındık, Ceviz İçi...",
                'image' => "/images/urun/no_image.jpg",
                'url' => "/p/karisik-cig",
                'categoryId' => 1,
                'brandId' => 1,
                'must' => 1,
                'meta' => "Tamamı Doğal ve Çiğ Ürünlerden Oluşan Lezzet Şöleni. Çiğ Kaju, Çiğ Badem, Çiğ Fındık, Ceviz İçi...",
                'keyword' => "kuruyemis, çiğ kaju, çiğ badem"
            ],
            [
                'name' => 'Kuş Lokumu',
                'price' => 16.50,
                'discountedPrice' => 15.50,
                'description' => "Lokum geleneksel bir türk tatlısı olup su, şeker ve nişasta gibi ana malzemelerden üretilir.
                                    Özel günlerde ikramlık olarak servis edebilir veya günlük olarak tüketilebilir",
                'image' => "/images/urun/no_image.jpg",
                'url' => "/p/kus-lokumu",
                'categoryId' => 2,
                'brandId' => 1,
                'must' => 2,
                'meta' => "Lokum geleneksel bir türk tatlısı olup su, şeker ve nişasta gibi ana malzemelerden üretilir.Özel günlerde ikramlık olarak servis edebilir veya günlük olarak tüketilebilir",
                'keyword' => "lokum ve sekerleme, lokum, kus lokumu"
            ],
        ]);
    }
}
