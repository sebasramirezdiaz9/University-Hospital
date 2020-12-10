<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProcedureMedicamentoReceta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE PROCEDURE sp_insert_medicamento_receta(IN _medicamento_id INTEGER, _receta_medica_id INTEGER, instrucciones VARCHAR(255))
        BEGIN
            INSERT INTO `medicamento_receta_medica`(`medicamento_id`, `receta_medica_id`, `instrucciones`) VALUES(_medicamento_id, _receta_medica_id, _instrucciones);
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_insert_medicamento_receta');
    }
}
