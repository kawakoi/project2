<?php

use Illuminate\Database\Seeder;
use App\Pastel;
class PastelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<100; $i++){
            Pastel::create([
                'titulo' => "$i Pastel de manzana",
                'ingredientes'  => "Arina, huevo, azucar y manzanas",
                'preparacion' => "Mételo todo al horno y ya está ^^"
            ]);
    }
}
}
