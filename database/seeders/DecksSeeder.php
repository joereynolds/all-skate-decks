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
                'name' => 'Enjoi Panda Logo',
                'brand_id' => 6,
                'description' => 'Some decsription here'
            ]
        );
    }
}
