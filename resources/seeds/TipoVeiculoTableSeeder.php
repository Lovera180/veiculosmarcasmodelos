<?php

use Illuminate\Database\Seeder;

class TipoVeiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_veiculo')->insert(['id' =>	1, 'descricao' => 'Carros e Utilitários']);
        DB::table('tipo_veiculo')->insert(['id' =>	2, 'descricao' => 'Motos']);
        DB::table('tipo_veiculo')->insert(['id' =>	3, 'descricao' => 'Caminhões e Ônibus']);

    }
}
