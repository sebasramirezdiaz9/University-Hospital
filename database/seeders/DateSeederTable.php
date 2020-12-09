<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DateSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [1, 2, '2021-05-07' ,'13:08:50.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [2, 3, '2021-01-1' ,'09:00:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [3, 2, '2021-01-01' ,'09:30:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [4, 5, '2021-01-01' ,'10:00:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [5, 6, '2021-01-01' ,'10:30:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [6, 7, '2021-01-01' ,'11:00:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [7, 8, '2021-01-01' ,'11:30:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [8, 5, '2021-01-01' ,'12:00:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [9, 6, '2021-01-01' ,'12:30:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into citas (paciente_id, doctor_id, fecha, hora, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [5, 4, '2021-01-01' ,'12:00:00.000000',Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);
       
    }
}
