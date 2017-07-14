<?php

use Illuminate\Database\Seeder;

class PromotoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_promotores')->insert([
            'sucursal_id' => 1,
            'nombre' => str_random(10),
            'paterno' => str_random(10),
            'materno' => str_random(10),
            'nombre_promotor' => str_random(50),
            'telefono' => str_random(20),
            'num_empleado' => str_random(20),
        ]);
    }
}
