<?php

use Illuminate\Database\Seeder;

class CatIdentificacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_identificaciones')->insert([
            'descripcion' => 'Acta de Nacimiento',
        ]);
        DB::table('cat_identificaciones')->insert([
            'descripcion' => 'Cartilla',
        ]);
        DB::table('cat_identificaciones')->insert([
            'descripcion' => 'Credencial de Elector',
        ]);
        DB::table('cat_identificaciones')->insert([
            'descripcion' => 'Licencia',
        ]);
        DB::table('cat_identificaciones')->insert([
            'descripcion' => 'Pasaporte',
        ]);
    }
}
