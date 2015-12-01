<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marcas', function(Blueprint $table){
            $table->foreign('tipo_veiculo_id')->references('id')->on('tipo_veiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marcas', function (Blueprint $table) {
            $table->dropForeign('marcas_tipo_veiculo_id_foreign');
        });
    }
}
