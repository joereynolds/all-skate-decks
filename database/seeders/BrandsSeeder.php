<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('brands')->insert(
            [
                ['name' => 'Alien Workshop'],
                ['name' => 'Almost'],
                ['name' => 'Baker'],
                ['name' => 'Chocolate'],
                ['name' => 'Darkstar'],
                ['name' => 'Enjoi'],
                ['name' => 'Element'],
                ['name' => 'Flip'],
                ['name' => 'Fracture'],
                ['name' => 'Girl'],
                ['name' => 'Heroin'],
                ['name' => 'Krooked'],
                ['name' => 'Santa Cruz'],
                ['name' => 'Thank You'],
                ['name' => 'Toy Machine'],
            ],
        );
    }
}
