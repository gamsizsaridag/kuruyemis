<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'name' => '10 FAYDA İLE CEVİZ AŞKI',
                'description' => '1) Ceviz, Omega 3  (alfa-linolenik asit) açısından en zengin ağaç yemişidir. Yüksek Omega 3 alımının, kalp-damar hastalıkları riskini azalttığı belirlenmiştir.(PAN 2012)',
                'image' => '/images/blog/ceviz.png',
                'url' => "/blog/ceviz-aski",
                'must' => 1,
                'meta' => "10 FAYDA İLE CEVİZ AŞKI",
                'keyword' => "ceviz, blog, anahtar, kelimeler"
            ],

        ]);
    }
}
