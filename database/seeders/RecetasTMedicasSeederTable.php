<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class RecetasTMedicasSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into recetas_medicas (id, doctor_id, paciente_id, estado_receta_id,  created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [1, 3, 2, 1 ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

    }
}
