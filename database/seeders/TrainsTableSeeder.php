<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->orario_di_arrivo = $faker->dateTimeBetween('+1 week', '+1 week');
            $train->codice_treno = $faker->regexify('[A-Z]{2}[0-9]{4}');
            $train->numero_carrozze = $faker->numberBetween(4, 20);
            $train->in_orario = $faker->boolean(80) ? si : no;
            $train->cancellato = $faker->boolean(5) ? si:  no;
            
            $train->save();
        }
    }
}
