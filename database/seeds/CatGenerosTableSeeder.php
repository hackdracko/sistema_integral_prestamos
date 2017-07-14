<?php

use Illuminate\Database\Seeder;

class CatGenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_generos')->insert([
            'descripcion' => 'Masculino',
        ]);
        DB::table('cat_generos')->insert([
            'descripcion' => 'Femenino',
        ]);
    }
}
