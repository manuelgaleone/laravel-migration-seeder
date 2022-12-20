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
            $new_train = new Train();
            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'AirTrain', 'VelociTrain']);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time('H:i');
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->bothify('#####');
            $new_train->numero_carrozze = $faker->numberBetween(5, 10);
            $new_train->in_orario = $faker->randomElement([true, false]);
            $new_train->cancellato = $faker->randomElement([true, false]);
            $new_train->save();
        }
    }
}
