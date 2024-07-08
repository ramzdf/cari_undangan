<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInvitation = [
            [
                'theme' => 'Romantic Delight',
                'description' => 'Desain yang bernuansa romantis dan melambangkan kesenangan dengan tampilan yang mewah dan elegan.',
            ],
            [
                'theme' => 'Dark Boho',
                'description' => 'Desain yang bernuansa malam gelap, tenang dan damai dengan tampilan yang simpel dan jelas.',
            ],
            [
                'theme' => 'Snowfall Minimalist',
                'description' => 'Desain yang bernuansa musim salju dan minimalis dengan tampilan yang simpel dan jelas.',
            ],
            [
                'theme' => 'Traditional Minang',
                'description' => 'Desain yang bernuansa minang tradisional dengan tampilan yang mewah dan elegan.',
            ],
            [
                'theme' => 'Traditional Bali',
                'description' => 'Desain yang bernuansa bali tradisional dengan tampilan yang mewah dan elegan.',
            ],
        ];

        DB::table('invitations')->insert($dataInvitation);
    }
}
