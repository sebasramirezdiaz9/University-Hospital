<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class RecetasTNMedicamentosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::insert('insert into medicamento_receta_medica (medicamento_id, receta_medica_id, instrucciones,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [1, 1, "Tomar cada 24hrs acompañada de alimento" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

    }
}
