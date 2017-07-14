<?php

use Illuminate\Database\Seeder;

class CatNacionalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_nacionalidades')->insert([
            'descripcion' => 'Mexicana',
        ]);
        DB::table('cat_nacionalidades')->insert([
            'descripcion' => 'Extranjera',
        ]);
    }
}
