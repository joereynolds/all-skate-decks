<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeckVariationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('deck_variations')->insert(
            [
                [
                    'name' => 'White',
                    'image_url' => 'https://media.titus.de/media/image/22/b3/bd/enjoi-skateboard-decks-whitey-panda-logo-wide-r7-white-vorderansicht-0115843_600x600.jpg',
                    'deck_id' => 1
                ],
                [
                    'name' => 'Rainbow',
                    'image_url' => 'https://cdn.shopify.com/s/files/1/0421/9410/8583/products/10017983_mint_1_1200x1200.jpg?v=1646760165',
                    'deck_id' => 1
                ]
            ]
        );
    }
}
