<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_house = new Train();
            $new_house->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'AirTrain', 'VelociTrain']);
            $new_house->stazione_di_partenza = $faker->city();
            $new_house->stazione_di_arrivo = $faker->city();
            $new_house->codice_treno = $faker->bothify('#####');
            $new_house->numero_carrozze = $faker->numberBetween(5, 10);
            $new_house->in_orario = $faker->randomElement([true, false]);
            $new_house->cancellato = $faker->randomElement([true, false]);
            $new_house->save();
        }
    }
}
