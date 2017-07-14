<?php

use Illuminate\Database\Seeder;

class CatOcupacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_ocupaciones')->insert([
            'descripcion' => 'trabajador',
            'segmento' => 1,
            'orden' => 1,
        ]);
        DB::table('cat_ocupaciones')->insert([
            'descripcion' => 'comerciante',
            'segmento' => 2,
            'orden' => 2,
        ]);
        DB::table('cat_ocupaciones')->insert([
            'descripcion' => 'otro',
            'segmento' => 3,
            'orden' => 3,
        ]);
    }
}
