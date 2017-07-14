<?php

use Illuminate\Database\Seeder;

class SucursalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_sucursales')->insert([
            'nombre_sucursal' => 1,
            'direccion' => str_random(10),
            'colonia' => str_random(10),
            'poblacion' => str_random(10),
            'estado_id' => '1',
            'localidad' => str_random(20),
            'codigo_postal' => str_random(5),
            'telefono' => str_random(20),
            'correo' => str_random(20),
            'iva' => '10',
        ]);
    }
}
