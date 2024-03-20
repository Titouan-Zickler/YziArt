<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Taille;
use Illuminate\Database\Seeder;


class TailleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Taille::create([
            'taille' => 'S'
        ]);

        Taille::create([
            'taille' => 'M'
        ]);
    }
}