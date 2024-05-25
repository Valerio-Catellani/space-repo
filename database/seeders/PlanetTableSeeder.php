<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planets = json_decode(file_get_contents(__DIR__ . '/pianeti.json'), true);
        foreach ($planets as $planet => $data) {
            $new_planet = new Planet();
            $new_planet->nome = $planet;
            $new_planet->diametro_equatoriale = $data['Diametro_equatoriale'];
            $new_planet->diametro_polare = $data['Diametro_polare'];
            $new_planet->volume = $data['Volume'];
            $new_planet->massa = $data['Massa'];
            $new_planet->densità_media = $data['Densità_media'];
            $new_planet->velocità_di_fuga = $data['Velocità_di_fuga'];
            $new_planet->temperatura_superficiale = $data['Temperatura_superficiale'];
            $new_planet->pressione_atmosferica = $data['Pressione_atmosferica'];
            $new_planet->save();
        }
    }
}
