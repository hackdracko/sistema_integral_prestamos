<?php

use Illuminate\Database\Seeder;

class CatEstadosCivilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_estados_civiles')->insert([
            'descripcion' => 'Soltero',
        ]);
        DB::table('cat_estados_civiles')->insert([
            'descripcion' => 'Casado',
        ]);
        DB::table('cat_estados_civiles')->insert([
            'descripcion' => 'Divorciado',
        ]);
        DB::table('cat_estados_civiles')->insert([
            'descripcion' => 'Viudo',
        ]);
        DB::table('cat_estados_civiles')->insert([
            'descripcion' => 'Union Libre',
        ]);
    }
}
