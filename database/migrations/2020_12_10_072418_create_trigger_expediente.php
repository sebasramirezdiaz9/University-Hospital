<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerExpediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
           CREATE TRIGGER tr_Expediente_Paciente AFTER INSERT ON `pacientes` FOR EACH ROW
               BEGIN
                   INSERT INTO expedientes (`paciente_id`, `created_at`, `updated_at`) 
                   VALUES (NEW.id, now(), now());
               END
           ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_Expediente_Paciente`');
    }
}
