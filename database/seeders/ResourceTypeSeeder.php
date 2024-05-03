<?php

namespace Database\Seeders;

use App\Models\ResourceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $resourceTypes = [
            [
                "name" => "Lote",
                "description" => "Lote de terreno"
            ],
            [
                "name" => "Casa",
                "description" => "Casa habitación"
            ],
            [
                "name" => "Departamento",
                "description" => "Departamento habitacional"
            ],
            [
                "name" => "Local",
                "description" => "Local comercial"
            ],
            [
                "name" => "Oficina",
                "description" => "Oficina comercial"
            ],
            [
                "name" => "Bodega",
                "description" => "Bodega comercial"
            ],
            [
                "name" => "Nave industrial",
                "description" => "Nave industrial"
            ],
            [
                "name" => "Terreno",
                "description" => "Terreno"
            ],
            [
                "name" => "Edificio",
                "description" => "Edificio"
            ],
            [
                "name" => "Casa en condominio",
                "description" => "Casa en condominio"
            ],
            [
                "name" => "Departamento en condominio",
                "description" => "Departamento en condominio"
            ],
            [
                "name" => "Local en condominio",
                "description" => "Local en condominio"
            ],
            [
                "name" => "Oficina en condominio",
                "description" => "Oficina en condominio"
            ],
            [
                "name" => "Bodega en condominio",
                "description" => "Bodega en condominio"
            ],
            [
                "name" => "Nave industrial en condominio",
                "description" => "Nave industrial en condominio"
            ],
            [
                "name" => "Terreno en condominio",
                "description" => "Terreno en condominio"
            ],
            [
                "name" => "Edificio en condominio",
                "description" => "Edificio en condominio"
            ],
            [
                "name" => "Casa en fraccionamiento",
                "description" => "Casa en fraccionamiento"
            ],
            [
                "name" => "Departamento en fraccionamiento",
                "description" => "Departamento en fraccionamiento"
            ],
            [
                "name" => "Local en fraccionamiento",
                "description" => "Local en fraccionamiento"
            ],
            [
                "name" => "Oficina en fraccionamiento",
                "description" => "Oficina en fraccionamiento"
            ],
            [
                "name" => "Bodega en fraccionamiento",
                "description" => "Bodega en fraccionamiento"
            ],
            [
                "name" => "Nave industrial en fraccionamiento",
                "description" => "Nave industrial en fraccionamiento"
            ],
            [
                "name" => "Terreno en fraccionamiento",
                "description" => "Terreno en fraccionamiento"
            ],
            [
                "name" => "Edificio en fraccionamiento",
                "description" => "Edificio en fraccionamiento"
            ],
            [
                "name" => "Casa en privada",
                "description" => "Casa en privada"
            ],
            [
                "name" => "Departamento en privada",
                "description" => "Departamento en privada"
            ],
            [
                "name" => "Local en privada",
                "description" => "Local en privada"
            ],
            [
                "name" => "Oficina en privada",
                "description" => "Oficina en privada"
            ],
            [
                "name" => "Bodega en privada",
                "description" => "Bodega en privada"
            ],
            [
                "name" => "Nave industrial en privada",
                "description" => "Nave industrial en privada"
            ],
            [
                "name" => "Terreno en privada",
                "description" => "Terreno en privada"
            ],
            [
                "name" => "Edificio en privada",
                "description" => "Edificio en privada"
            ],
        ];
        ResourceType::insert($resourceTypes);
    }
}
