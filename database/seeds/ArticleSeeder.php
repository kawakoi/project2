<?php

use App\Article;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<40; $i++){
            Article::create([
                'title' => "$i Viaje gratis a algun lugar mágico...",
                'body'  => "body jsdkjcfpalzdscnhjud l ksjdfh dsau",
                'author' => "Pepito"

            ]);
        }
    }
}
