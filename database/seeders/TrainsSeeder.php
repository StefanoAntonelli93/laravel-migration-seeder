<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();

        $train->azienda = 'Trenino';
        $train->stazione_di_partenza = 'Venezia';
        $train->stazione_di_arrivo = 'Milano';
        $train->orario_di_partenza = '14.00';
        $train->orario_di_arrivo = '16.00';
        $train->codice_treno = '45698';
        $train->numero_carrozze = 14;
        $train->in_orario = 1;
        $train->cancellato = 0;
        $train->data_di_partenza = ' 	2024-07-10';
        $train->data_di_arrivo = ' 	2024-07-10';

        $train->save();
    }
}
