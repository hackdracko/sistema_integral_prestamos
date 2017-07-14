<?php

use Illuminate\Database\Seeder;

class CatCompaniaCelularesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'Telcel',
        ]);
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'Movistar',
        ]);
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'at&t',
        ]);
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'Iusacell',
        ]);
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'Unefon',
        ]);
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'Virgin',
        ]);
        DB::table('cat_compania_celulares')->insert([
            'descripcion' => 'Otro',
        ]);
    }
}
