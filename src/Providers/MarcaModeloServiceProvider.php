<?php

namespace Lovera180\MarcaModelo\Providers;

use Illuminate\Support\ServiceProvider;

class MarcaModeloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $base                       = __DIR__ . '/../../resources/';

        $migrationCreateTipoVeiculo = '2015_11_09_000000_create_tipo_veiculo_table.php';
        $migrationCreateMarcas      = '2015_11_09_000001_create_marcas_table.php';
        $migrationCreateModelos     = '2015_11_09_000002_create_modelos_table.php';
        $migrationAlterMarcas       = '2015_11_09_000003_alter_marcas_table.php';
        $migrationAlterModelos      = '2015_11_09_000004_alter_modelos_table.php';

        $seederTipoVeiculo          = 'TipoVeiculoTableSeeder.php';
        $seederMarca                = 'MarcasTableSeeder.php';
        $seederModelo               = 'ModelosTableSeeder.php';

        $this->publishes([
            $base . 'migrations/' . $migrationCreateTipoVeiculo => base_path('database/migrations/' . $migrationCreateTipoVeiculo),
            $base . 'migrations/' . $migrationCreateMarcas      => base_path('database/migrations/' . $migrationCreateMarcas),
            $base . 'migrations/' . $migrationCreateModelos     => base_path('database/migrations/' . $migrationCreateModelos),
            $base . 'migrations/' . $migrationAlterMarcas       => base_path('database/migrations/' . $migrationAlterMarcas),
            $base . 'migrations/' . $migrationAlterModelos      => base_path('database/migrations/' . $migrationAlterModelos),

            $base . 'seeds/' . $seederTipoVeiculo   => base_path('database/seeds/' . $seederTipoVeiculo),
            $base . 'seeds/' . $seederMarca         => base_path('database/seeds/' . $seederMarca),
            $base . 'seeds/' . $seederModelo        => base_path('database/seeds/' . $seederModelo)
        ]);
    }
}