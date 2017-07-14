<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_grupos')->insert([
            'sucursal_id' => 1,
            'promotor_id' => 1,
            'nombre_grupo' => str_random(10),
            'fecha_inicio_ciclo' => Carbon::now()->format('Y-m-d H:i:s'),
            'fecha_fin_ciclo' => Carbon::now()->format('Y-m-d H:i:s'),
            'num_ciclo' => 1,
            'dia_reunion' => str_random(10),
            'hora_reunion' => str_random(10),
            'telefono' => str_random(20),
            'domicilio' => str_random(20),
            'fecha_alta_grupo' => Carbon::now()->format('Y-m-d H:i:s'),
            'contacto' => str_random(20),
        ]);
    }
}
