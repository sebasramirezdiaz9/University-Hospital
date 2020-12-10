<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProcedureInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS sp_insert_inventory;
        CREATE PROCEDURE sp_insert_inventory(IN _medicamento_id INTEGER, _cantidad INTEGER)
        BEGIN
            INSERT INTO `inventory`(`medicamento_id`, `cantidad`) VALUES(_medicamento_id, _cantidad);
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_insert_inventory');
    }
}
