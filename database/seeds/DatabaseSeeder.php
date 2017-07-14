<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SucursalesTableSeeder::class);
        $this->call(PromotoresTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(CatCompaniaCelularesTableSeeder::class);
        $this->call(CatCompetenciasTableSeeder::class);
        $this->call(CatDestinoCreditosTableSeeder::class);
        $this->call(CatEstadosTableSeeder::class);
        $this->call(CatEstadosCivilesTableSeeder::class);
        $this->call(CatGenerosTableSeeder::class);
        $this->call(CatIdentificacionesTableSeeder::class);
        $this->call(CatOcupacionesTableSeeder::class);
        $this->call(CatStsGrupoClienteTableSeeder::class);
        $this->call(CatNacionalidadesTableSeeder::class);
    }
}
