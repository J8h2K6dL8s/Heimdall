<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create(['nom' => 'Catégorie A', "description" => "Description 1"]);
        Categorie::create(['nom' => 'Catégorie B', "description" => "Description B"]);
    }
}
