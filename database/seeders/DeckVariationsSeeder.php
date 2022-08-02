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
                    'name' => 'Green',
                    'image_url' => 'https://cdn.shopify.com/s/files/1/1503/7616/products/alien-workshop-believe-pre-built-complete-green-7-75-01_600x600_crop_center.jpg?v=1625336573',
                    'deck_id' => 1
                ],
                [
                    'name' => 'Yellow',
                    'image_url' => 'https://whscdn.warehouseskateboards.com/images/products/preview/1CALI0BELI775YY.jpg',
                    'deck_id' => 1
                ],
                [
                    'name' => 'White',
                    'image_url' => 'https://media.titus.de/media/image/22/b3/bd/enjoi-skateboard-decks-whitey-panda-logo-wide-r7-white-vorderansicht-0115843_600x600.jpg',
                    'deck_id' => 2
                ],
                [
                    'name' => 'Rainbow',
                    'image_url' => 'https://cdn.shopify.com/s/files/1/0421/9410/8583/products/10017983_mint_1_1200x1200.jpg?v=1646760165',
                    'deck_id' => 2
                ]
            ]
        );
    }
}
