<?php

use Illuminate\Database\Seeder;

class CatDestinoCreditosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_destino_creditos')->insert([
            'descripcion' => 'Destino 1',
            'orden' => 1,
        ]);
        DB::table('cat_destino_creditos')->insert([
            'descripcion' => 'Destino 2',
            'orden' => 2,
        ]);
        DB::table('cat_destino_creditos')->insert([
            'descripcion' => 'Destino 3',
            'orden' => 3,
        ]);
        DB::table('cat_destino_creditos')->insert([
            'descripcion' => 'Destino 4',
            'orden' => 4,
        ]);
        DB::table('cat_destino_creditos')->insert([
            'descripcion' => 'Destino 5',
            'orden' => 5,
        ]);
    }
}
