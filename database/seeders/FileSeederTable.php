<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FileSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [1, '65', '1.60', 'Paracetamol',1,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [2, '66', '1.68', 'N/A',2 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [3, '70', '1.73', 'N/A',3 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [4, '50', '1.60', 'N/A',4 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [5, '55', '1.62', 'N/A',5 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [6, '90', '1.80', 'N/A',6 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [7, '70', '1.65', 'N/A',7 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [8, '70', '1.70', 'N/A',8 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [9, '42', '1.50', 'N/A',9 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into expedientes (id,peso,altura,alergias,paciente_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [10, '80', '1.75', 'N/A',10 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);
    }
}
