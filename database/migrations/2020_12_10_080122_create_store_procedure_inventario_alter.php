<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProcedureInventarioAlter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS sp_update_inventory;
        CREATE PROCEDURE sp_update_inventory(IN _medicamento_id INTEGER, _cantidad INTEGER)
        BEGIN
            UPDATE `inventory` SET cantidad = _cantidad where medicamento_id = _medicamento;
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_inventory');
    }
}
