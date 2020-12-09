<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PatientSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Sebastián', 'Ramírez', 'Díaz', '4491025178','Masculino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [2, 'Luis', 'Gomez', 'Armendariz', '4491115232','Masculino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [3, 'Karla', 'Valenzuela', 'Jimenez', '4492531245','Femenino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [4, 'Martha', 'Gallegos', 'Soto', '4494521236','Femenino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [5, 'Carmen', 'Ortiz', 'Díaz', '4494521236','Femenino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [6, 'Lizbeth', 'Garcia', 'Gonzalez', '4497852132','Femenino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [7, 'Jaqueline', 'Valtierra', 'Franco', '4494521236','Femenino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [8, 'Lucia', 'Alvarez', 'Esparza', '4494523212','Femenino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [9, 'Miguel', 'Valdez', 'Lopez', '4498523212','Masculino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into pacientes (id, name, ape_pat, ape_mat, telefono, genero, fecha_nacimiento, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [10, 'Diego', 'Esparza', 'Gonzalez', '4495231452','Masculino',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);
    }
}
