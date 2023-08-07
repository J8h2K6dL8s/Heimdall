<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create(['nom' => 'Chaussure', "description" => "Description 1", "prix" => "200 ", 'categorie_id' => '1', 'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shutterstock.com%2Ffr%2Fcategory%2Fnature&psig=AOvVaw1FVCJsazZT3VTWU_-pIRN8&ust=1691492161624000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPjH8L2xyoADFQAAAAAdAAAAABAE']);
        Produit::create(['nom' => 'Sac', "description" => "Description 2", "prix" => "500 ", 'categorie_id' => '4', 'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Ffr%2Fs%2Fphotos%2Fbelle-nature&psig=AOvVaw1FVCJsazZT3VTWU_-pIRN8&ust=1691492161624000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPjH8L2xyoADFQAAAAAdAAAAABAJ']);
        // Produit::create(['nom' => 'Chaussure', "description" => "Description 1", "prix" => "200 fcfa", 'categorie_id' => '1', 'image' => 'toto']);
    }
}
