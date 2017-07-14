<?php

use Illuminate\Database\Seeder;

class CatEstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_estados')->insert([
            'descripcion' => 'Estado 1',
        ]);
        DB::table('cat_estados')->insert([
            'descripcion' => 'Estado 2',
        ]);
        DB::table('cat_estados')->insert([
            'descripcion' => 'Estado 3',
        ]);
        DB::table('cat_estados')->insert([
            'descripcion' => 'Estado 4',
        ]);
        DB::table('cat_estados')->insert([
            'descripcion' => 'Estado 5',
        ]);
    }
}
