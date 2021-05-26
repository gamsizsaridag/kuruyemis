<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
            [
                'name' => '2021 Mayıs Ayı Katalogu',
                'description' => '2021 Mayıs ayı katalogu ile ürünlerimiz ve fiyatları',
                'file' => '/catalogs/guvenkuruyemis.pdf',
                'must' => 1,

            ],

        ]);
    }
}
