<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Journey;

class JourneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $journeys = json_decode(file_get_contents(__DIR__ . '/journeys.json'), true);
        foreach ($journeys as $journey) {
            $new_journey =  new Journey();
            $new_journey->pianeta_di_partenza = $journey['pianeta_di_partenza'];
            $new_journey->pianeta_di_destinazione = $journey['pianeta_di_destinazione'];
            $new_journey->data_di_partenza = $journey['data_di_partenza'];
            $new_journey->data_di_arrivo = $journey['data_di_arrivo'];
            $new_journey->costo_biglietto = $journey['costo_biglietto'];
            $new_journey->codice_astronave = $journey['codice_astronave'];
            $new_journey->descrizione_viaggio = $journey['descrizione_viaggio'];
            $new_journey->nome_azienda = $journey['nome_azienda'];
            $new_journey->save();
        }
    }
}
