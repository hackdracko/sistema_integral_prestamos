<?php

use Illuminate\Database\Seeder;

class CatStsGrupoClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_sts_grupocliente')->insert([
            'descripcion' => 'Estatus 1',
        ]);
        DB::table('cat_sts_grupocliente')->insert([
            'descripcion' => 'Estatus 2',
        ]);
        DB::table('cat_sts_grupocliente')->insert([
            'descripcion' => 'Estatus 3',
        ]);
    }
}
