<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'name' => 'Habib saridag',
                'email' => 'habibsaridag12@gmail.com',
                'gsm' => '0541 598 9010',
                'message' => "deneme mesajıdır",
            ],

        ]);
    }
}
