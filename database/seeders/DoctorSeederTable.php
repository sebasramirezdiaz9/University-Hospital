<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DoctorSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Gregory', 'House', 'Martinez','4491025178', 'UAA', '0123456789', 1 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [2, 'Alejandra', 'Espinoza', 'Franco','4491295232', 'UAA', '1258645587', 2 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [3, 'Luis', 'Esparza', 'Martinez','4491304562', 'UAA', '4521587459', 3 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [4, 'Carlos', 'Flores', 'Cortes','4491523220', 'BUAA', '4523658742', 4 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [5, 'Gustavo', 'Marquez', 'Villalpando','4491305266', 'UNAM', '2563148752', 5 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [6, 'Angel', 'Gallegos', 'Soto','4491503621', 'UAA', '4582154858', 6 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [7, 'Emma', 'Esquivel', 'Gutierrez','4491805232', 'UNAM', '4521368521', 7 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [8, 'Cristina', 'Martinez', 'Franco','4491245232', 'UNAM', '7582453214', 8 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [9, 'Carolina', 'Ramirez', 'Jimenez','4491520120', 'UAA', '7582145232', 9,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into doctores (id, name, ape_pat, ape_mat, telefono, universidad, cedula_profesional, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [10, 'Alejandra', 'Carranza', 'Valeria','4494562352', 'UAA', '45821032659', 10 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);
    }
}
