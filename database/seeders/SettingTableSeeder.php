<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'name' => 'Güven Kuruyemis',
                'address' => "İnönü Mah. ...",
                'gsm' => "0507 503 9112",
                'email' => "info@guvenkuruyemis.com",
                'title' => "Güven",
                'siteUrl' => "www.guvenkuruyemis.com",
                'whatsapp' => "+905075039112",
                'instagram' => "http://instagram.com/guvenkuruyemis12",
                'meta' => "kısa bir blog yazısı",
                'keyword' => "anahtar, kelimeler",
                'about_name' => 'Deneme Hakkımızda',
                'about_description' => 'hakkımızda uzun yazı....',
                'about_status' => '1',
            ],

        ]);
    }
}
