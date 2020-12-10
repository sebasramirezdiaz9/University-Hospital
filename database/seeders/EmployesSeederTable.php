<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EmployesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Beatriz', 'Gonzalez', 'Franco','4491423256', 11 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [2, 'Daniela', 'Martinez', 'Valadez','4491254532', 12 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [3, 'Maria', 'Jimenez', 'Floriano','4491534523', 13 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [4, 'German', 'Marquez', 'Uribe','4494523216', 14 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [5, 'Fernando', 'Lopez', 'Garcia','4495231245', 15 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [6, 'Alfredo', 'Rodriguez', 'Lopez','4498523262', 16 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [7, 'Ana', 'Cortes', 'Franco','4494523212', 17 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [8, 'Lorena ', 'Armendariz', 'Espinoza','4497852363', 18 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [9, 'Lizeth', 'Montañez', 'Hernandez','4495232153', 19 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into empleados (id, nombre, ape_pat, ape_mat, telefono, user_id ,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [10, 'Karen', 'Velazco', 'Murillo','4491252412', 20 ,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

    }
}
