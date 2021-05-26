<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Güven',
                'url' => "/b/Güven",
                'must' => 1,
                'meta' => "Güven marka hakkında kısa bir blog",
                'keyword' => "Güven, marka, anahtar, kelimeler"
            ],

        ]);
    }
}
