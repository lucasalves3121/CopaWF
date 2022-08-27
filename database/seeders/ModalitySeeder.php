<?php

namespace Database\Seeders;

use App\Enums\TeamModality;
use App\Models\Modality;
use Illuminate\Database\Seeder;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modality::insert([
            [
                'name' => 'Futsal Masculino',
                'template' => 1,
            ],
            [
                'name' => 'Futsal Feminino',
                'template' => 2,
            ],
            [
                'name' => 'Voley Misto',
                'template' => 3,
            ],
            [
                'name' => 'Ping Pong',
                'template' => 4,
            ],
            [
                'name' => 'Carimba',
                'template' => 5,
            ],
            [
                'name' => 'Futmesa',
                'template' => 6,
            ],
        ]);
    }
}
