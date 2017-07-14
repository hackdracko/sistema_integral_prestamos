<?php

use Illuminate\Database\Seeder;

class CatCompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_competencias')->insert([
            'descripcion' => 'competencia 1',
            'orden' => 1,
        ]);
        DB::table('cat_competencias')->insert([
            'descripcion' => 'competencia 2',
            'orden' => 2,
        ]);
        DB::table('cat_competencias')->insert([
            'descripcion' => 'competencia 3',
            'orden' => 3,
        ]);
        DB::table('cat_competencias')->insert([
            'descripcion' => 'competencia 4',
            'orden' => 4,
        ]);
        DB::table('cat_competencias')->insert([
            'descripcion' => 'competencia 5',
            'orden' => 5,
        ]);
    }
}
