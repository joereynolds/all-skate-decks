<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('artists')->insert(
            ['name' => 'Ed Templeton'],
            ['name' => 'Donny Miller'],
            ['name' => 'Todd Francis'],
        );
    }
}
