<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'Acción',
                'descripcion' => 'Emocionantes combates y aventuras llenas de acción y adrenalina.'
            ],
            [
                'nombre' => 'RPG',
                'descripcion' => 'Sumérgete en mundos de fantasía y vive aventuras épicas con personajes personalizables y una narrativa profunda.'
            ],
            [
                'nombre' => 'Lucha',
                'descripcion' => 'Enfréntate a oponentes en intensos combates cuerpo a cuerpo y demuestra tus habilidades marciales.'
            ],
            [
                'nombre' => 'Battle Royale',
                'descripcion' => 'Lucha por ser el último sobreviviente en un mapa amplio y hostil, recolecta recursos y elimina a tus oponentes.'
            ],
            [
                'nombre' => 'Shooter',
                'descripcion' => 'Sumérgete en frenéticas batallas de disparos en primera o tercera persona con una amplia variedad de armas y modos de juego.'
            ],
            [
                'nombre' => 'Survival',
                'descripcion' => 'Supera desafíos extremos de supervivencia en entornos hostiles, lucha contra peligros naturales y enemigos para mantenerte con vida.'
            ],
            [
                'nombre' => 'Aventura',
                'descripcion' => 'Explora mundos vastos y misteriosos, resuelve acertijos y vive emocionantes historias en tus propias aventuras.'
            ],
            [
                'nombre' => 'Simulacion',
                'descripcion' => 'Competencias virtuales realistas con vehículos, circuitos y emocionantes desafíos.'
            ],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria['nombre'],
                'descripcion' => $categoria['descripcion'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


        $juegos = [
            [
                'nombre' => 'Dragon Ball FighterZ',
                'descripcion' => 'Descripción de Dragon Ball FighterZ',
                'id_categoria' => 3,
                'precio' => 1500,
                'path_imagen' => 'img/dragon-ball.jpg',
            ],
            [
                'nombre' => 'Elden Ring',
                'descripcion' => 'Descripción de Elden Ring',
                'id_categoria' => 1,
                'precio' => 3500,
                'path_imagen' => 'img/elden-ring.jpg',
            ],
            [
                'nombre' => 'Fortnite',
                'descripcion' => 'Descripción de Fortnite',
                'id_categoria' => 4,
                'precio' => 0,
                'path_imagen' => 'img/fortnite.jpg',
            ],
            [
                'nombre' => 'Battlefront 2',
                'descripcion' => 'Descripción de Battlefront 2',
                'id_categoria' => 5,
                'precio' => 2000,
                'path_imagen' => 'img/battlefront2.jpg',
            ],
            [
                'nombre' => 'Battlefield 5',
                'descripcion' => 'Descripción de Battlefield 5',
                'id_categoria' => 5,
                'precio' => 1800,
                'path_imagen' => 'img/battlefield5.png',
            ],
            [
                'nombre' => 'Batman Arkham Knight',
                'descripcion' => 'Descripción de Batman Arkham Knight',
                'id_categoria' => 1,
                'precio' => 2800,
                'path_imagen' => 'img/batman.jpg',
            ],
            [
                'nombre' => 'Dead Cells',
                'descripcion' => 'Descripción de Dead Cells',
                'id_categoria' => 2,
                'precio' => 1200,
                'path_imagen' => 'img/deadcells.png',
            ],
            [
                'nombre' => 'Dead Island 2',
                'descripcion' => 'Descripción de Dead Island 2',
                'id_categoria' => 6,
                'precio' => 1800,
                'path_imagen' => 'img/dead-island-2.jpg',
            ],
            [
                'nombre' => 'GTA VI',
                'descripcion' => 'Descripción de GTA VI',
                'id_categoria' => 1,
                'precio' => 4000,
                'path_imagen' => 'img/gta-vi.png',
            ],
            [
                'nombre' => 'Hogwarts Legacy',
                'descripcion' => 'Descripción de Hogwarts Legacy',
                'id_categoria' => 7,
                'precio' => 2500,
                'path_imagen' => 'img/hogwarts-legacy.jpg',
            ],
            [
                'nombre' => 'Project Zomboid',
                'descripcion' => 'Descripción de Project Zomboid',
                'id_categoria' => 6,
                'precio' => 1500,
                'path_imagen' => 'img/project-zomboid.jpg',
            ],
            [
                'nombre' => 'Minecraft',
                'descripcion' => 'Descripción de Minecraft',
                'id_categoria' => 6,
                'precio' => 1000,
                'path_imagen' => 'img/minecraft.png',
            ],
            [
                'nombre' => 'Terraria',
                'descripcion' => 'Descripción de Terraria',
                'id_categoria' => 2,
                'precio' => 800,
                'path_imagen' => 'img/terraria.jpg',
            ],
            [
                'nombre' => 'Jedi Survivor',
                'descripcion' => 'Descripción de Jedi Survivor',
                'id_categoria' => 1,
                'precio' => 2000,
                'path_imagen' => 'img/jedi-survivor.jpg',
            ],
        ];

        foreach ($juegos as $juego) {
            DB::table('juegos')->insert([
                'nombre' => $juego['nombre'],
                'descripcion' => $juego['descripcion'],
                'id_categoria' => $juego['id_categoria'],
                'precio' => $juego['precio'],
                'path_imagen' => $juego['path_imagen'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}