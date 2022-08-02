<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DecksSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('decks')->insert(
            [
                [
                    'name' => 'Alien Workshop Believe',
                    'brand_id' => 1,
                    'description' => 'Some description here'
                ],
                [
                    'name' => 'Enjoi Panda Logo',
                    'brand_id' => 6,
                    'description' => 'Some description here'
                ]  ,
            ]
        );
    }
}
