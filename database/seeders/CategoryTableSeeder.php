<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            [
                'name' => 'Kuruyemiş',
                'url' => "/c/kuruyemis",
                'must' => 1,
                'meta' => "Kuruyemis kategori hakkında kısa bir blog",
                'keyword' => "kuruyemis, kategori, anahtar, kelimeler"
            ],

            [
                'name' => 'Lokum ve Şekerleme',
                'url' => "/c/lokum-ve-sekerleme",
                'must' => 2,
                'meta' => "Lokum ve Şekerleme kategori hakkında kısa bir blog",
                'keyword' => "Lokum ve Şekerleme, kategori, anahtar, kelimeler"
            ],

        ]);
    }
}
