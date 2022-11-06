<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $tempCode = 'XaXAxdS';
        for($i = 0; $i < 50; $i++){
            $train = new Train();
            $train->azienda = $faker->name();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $randomDate =  $faker->date();
            $train->data_di_partenza = $randomDate;
            $train->data_di_arrivo = $randomDate;
            $train->codice_treno = $tempCode . $i;
            $train->save();
        }
    }
}
